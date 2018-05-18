<?php
namespace App\Discord;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class SendMessageToChannel
{
    /** @var Client */
    private $client;

    /** @var string  */
    private $baseUri;

    /** @var string */
    private $token;

    /** 
     * @param Client $client
     * @param string $baseUri
     * @param string $token
     */
    public function __construct(Client $client, string $baseUri, string $token )
    {
        $this->client = $client;
        $this->baseUri = $baseUri;
        $this->token = $token;
    }

    /**
     * Handle a POST call
     *
     * @param array $payload
     *
     * @return mixed
     * @throws RequestException
     * @throws \LogicException
     */
    public function post(array $payload)
    {
        return $this->client->post($this->baseUri, [
            'headers' => [
                'Authorization' => 'Bot ' . $this->token,
                'Content-Type' => 'application/json',
            ],
            'body' => json_encode($payload, JSON_UNESCAPED_UNICODE),
        ]);
    }
}
