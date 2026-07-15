<?php

class Resource extends JsonResource
{
    protected $resourceName = 'resource';

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return ResponseFormatter::singleton(
            $this->resourceName,
            $this->toBaseArray($request),
        );
    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toBaseArray(Request $request): array
    {
        return $this->resource->toArray();
    }
}
