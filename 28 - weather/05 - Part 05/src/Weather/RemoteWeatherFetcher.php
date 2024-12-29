<?php

namespace App\Weather;

class RemoteWeatherFetcher implements WeatherFetcherInterface {

    public function fetch(string $city): ?WeatherInfo {
        $url = "https://downloads.codingcoursestv.eu/056%20-%20php/weather/weather.php";
        $queryParams = http_build_query(['city' => 'Los Angeles']);

        $ch = curl_init($url . '?' . $queryParams);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Host: downloads.codingcoursestv.eu', // Host header
        ]);

        // Execute the request
        $response = curl_exec($ch);

        // Handle errors
        if (curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
            return null;
        } else {
            // Process the response
            $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Get HTTP status code
            $decodedResponse = json_decode($response, true); // Decode JSON response

            var_dump($statusCode);

            // Output the response
            if ($statusCode === 200) {
                var_dump($decodedResponse);
            } else {
                echo "HTTP Error: $statusCode\n";
                return null;
            }
        }

        // Close cURL
        curl_close($ch);

        return new WeatherInfo($decodedResponse['city'],$decodedResponse['temperature'],$decodedResponse['weather']);
    }
}
