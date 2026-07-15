<?php

class OidcServiceImpl implements OidcService
{
    protected IssuerInterface $issuer;

    protected ClientInterface $client;

    protected TokenVerifierInterface $accessTokenVerifier;

    protected IntrospectionService $introspectionService;

    protected UserInfoService $userInfoService;

    public function __construct(
        private PsrCacheRepository $cacheRepository,
    ) {
        $this->getIssuer();
        $this->getClient();
        $this->getAccessTokenVerifier();
        $this->getIntrospectionService();
        $this->getUserInfoService();
    }

    protected function getMetadataProviderBuilder(): MetadataProviderBuilder
    {
        $builder = (new MetadataProviderBuilder)
            ->setCache($this->cacheRepository)
            // Cache metadata for 30 days
            ->setCacheTtl(2592000);

        return $builder;
    }

    protected function getJwksProviderBuilder(): JwksProviderBuilder
    {
        $builder = (new JwksProviderBuilder)
            ->withCache($this->cacheRepository)
            // Cache JWKS for 1 day
            ->withCacheTtl(86400);

        return $builder;
    }

    protected function getIssuerBuilder(): IssuerBuilder
    {
        $builder = (new IssuerBuilder)
            ->setMetadataProviderBuilder($this->getMetadataProviderBuilder())
            ->setJwksProviderBuilder($this->getJwksProviderBuilder());

        return $builder;
    }

    protected function getClientBuilder(): ClientBuilder
    {
        $builder = (new ClientBuilder)
            ->setIssuer($this->getIssuer())
            ->setClientMetadata(ClientMetadata::fromArray([
                'client_id' => config('oidc.client_id'),
                'client_secret' => config('oidc.client_secret'),
            ]));

        return $builder;
    }

    protected function getAccessTokenVerifierBuilder(): AccessTokenVerifierBuilder
    {
        return new AccessTokenVerifierBuilder;
    }

    protected function getIntrospectionServiceBuilder(): IntrospectionServiceBuilder
    {
        return new IntrospectionServiceBuilder;
    }

    protected function getUserInfoServiceBuilder(): UserInfoServiceBuilder
    {
        return new UserInfoServiceBuilder;
    }

    protected function getIssuerMetadata(): IssuerMetadataInterface
    {
        return $this->getIssuer()->getMetadata();
    }

    protected function getClientMetadata(): ClientMetadataInterface
    {
        return $this->getClient()->getMetadata();
    }

    protected function getIssuer(): IssuerInterface
    {
        if (! empty($this->issuer)) {
            return $this->issuer;
        }

        return $this->issuer = $this->getIssuerBuilder()
            ->build(config('oidc.configurations_uri'));
    }

    protected function getClient(): ClientInterface
    {
        if (! empty($this->client)) {
            return $this->client;
        }

        return $this->client = $this->getClientBuilder()
            ->build();
    }

    protected function getAccessTokenVerifier(): TokenVerifierInterface
    {
        if (! empty($this->accessTokenVerifier)) {
            return $this->accessTokenVerifier;
        }

        return $this->accessTokenVerifier = $this->getAccessTokenVerifierBuilder()
            ->build($this->getClient());
    }

    protected function getIntrospectionService(): IntrospectionService
    {
        if (! empty($this->introspectionService)) {
            return $this->introspectionService;
        }

        return $this->introspectionService = $this->getIntrospectionServiceBuilder()
            ->build();
    }

    protected function getUserInfoService(): UserInfoService
    {
        if (! empty($this->userInfoService)) {
            return $this->userInfoService;
        }

        return $this->userInfoService = $this->getUserInfoServiceBuilder()
            ->build();
    }

    /**
     * @throws InvalidTokenException
     */
    public function verify(string $token): array
    {
        $verifier = $this->getAccessTokenVerifier();

        return $verifier->verify($token);
    }

    public function introspect(string $token): array
    {
        $service = $this->getIntrospectionService();

        return $service->introspect($this->client, $token);
    }

    public function getUserInfo(string $token): array
    {
        $service = $this->getUserInfoService();

        return $service->getUserInfo($this->client, TokenSet::fromParams(['access_token' => $token]));
    }
}
