<?php

namespace App\Weather;

class RemoteWeatherFetcher implements WeatherFetcherInterface {

    public function __construct(
        private string $url = "https://downloads.codingcoursestv.eu/056%20-%20php/weather/weather.php"
    ) {}

    public function fetch(string $city): ?WeatherInfo {
        $queryParams = http_build_query(['city' => $city]);

        $ch = curl_init($this->url . '?' . $queryParams);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string

        // Execute the request
        $response = curl_exec($ch);

        // Handle cURL errors
        if ($this->hasCurlError($ch)) {
            curl_close($ch);
            return null;
        }

        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Get HTTP status code
        curl_close($ch);

        // Handle HTTP status errors
        if ($this->isHttpError($statusCode)) {
            return null;
        }

        $decoded = json_decode($response, true); // true to get assoc array instead of object

        // Validate the response format
        if (!isset($decoded['city'], $decoded['temperature'], $decoded['weather'])) {
            echo "Invalid response format.\n";
            return null;
        }

        return new WeatherInfo(
            $decoded['city'],
            $decoded['temperature'],
            $decoded['weather']
        );
    }

    private function hasCurlError($ch): bool {
        if (curl_errno($ch)) {
            echo 'cURL Error: ' . curl_error($ch) . "\n";
            return true;
        }
        return false;
    }

    private function isHttpError(int $statusCode): bool {
        if ($statusCode !== 200) {
            echo "HTTP Error: $statusCode\n";
            return true;
        }
        return false;
    }
}
