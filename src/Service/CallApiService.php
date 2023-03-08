<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{
    public function __construct(
        HttpClientInterface $client,
    )
    {
        $this->client = $client;
    }

    public function getPictureOfTheDay(): array
    {
        $response = $this->client->request(
            Request::METHOD_GET,
            'https://api.nasa.gov/planetary/apod',
            [
                'query' => [
                    'date' => date('Y-m-d'),
                    'api_key' => 'fARtocReuhy4nL8nUQi8lXgKk7aqlGAUYJ9vMLKd'
                ]
            ]
        );

        $decoded = json_decode($response->getContent(), true);

        //if($decoded['media_type'] != 'image'){
            //dd($this->repository->findOneBy(['date' => $decoded(['date'])]));
            //return $decoded;
        //}

        return $decoded;
    }
}