<?php

namespace Lequipe\Services;

interface GuzzleServiceInterface
{
    /**
     * Send a PUT request
     *
     * @param string|array|Url $url     URL or URI template
     * @param array            $options Array of request options to apply.
     *
     * @return ResponseInterface
     * @throws RequestException When an error is encountered
     */
    public function post($url = null, array $data = [], array $headers = []);

    /**
     * Send a GET request
     *
     * @param string|array|Url $url     URL or URI template
     *
     * @return ResponseInterface
     * @throws RequestException When an error is encountered
     */
    public function get($uri = null, $headers = [], $params = []);

    /**
     * Send a DELETE request
     *
     * @param string|array|Url $url     URL or URI template
     *
     * @return ResponseInterface
     * @throws RequestException When an error is encountered
     */
    public function delete($uri = null, array $headers = []);

    /**
     * @param $uri
     * @param array $data
     * @param array $headers
     * @return mixed
     */
    public function put($uri, array $data = [], array $headers = []);
}
