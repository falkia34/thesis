export interface InfinityApiDataSource extends AxiosInstance {}

export const infinityApiDataSourceImpl: InfinityApiDataSource = axios.create({
  baseURL: process.env.NEXT_PUBLIC_INFINITY_API_URL,
  timeout:
    process.env.NEXT_PUBLIC_INFINITY_API_TIMEOUT != null
      ? Number(process.env.NEXT_PUBLIC_INFINITY_API_TIMEOUT)
      : 10000,
});
