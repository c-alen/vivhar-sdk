<?php

namespace VIVAHR\Endpoints;

use VIVAHR\HttpClient\Client;

class Jobs
{
    private $client;

    public function __construct($auth)
    {
        $this->client = new Client($auth->getAccessToken());
    }

    public function create(array $data)
    {
        return $this->client->request('POST', 'jobs', ['json' => $data]);
    }

    public function edit($jobId, array $data)
    {
        return $this->client->request('PATCH', "jobs/{$jobId}", ['json' => $data]);
    }

    public function update($jobId, array $data)
    {
        return $this->client->request('PUT', "jobs/{$jobId}", ['json' => $data]);
    }

    public function delete($jobId)
    {
        return $this->client->request('DELETE', "jobs/{$jobId}");
    }

    public function list()
    {
        return $this->client->request('GET', "jobs");
    }
}
