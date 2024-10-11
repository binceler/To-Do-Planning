<?php

namespace App\Http\JobList;

use Illuminate\Support\Facades\Http;

class ProviderOne extends BaseProviderAbstract
{
    public $apiUrl = 'https://raw.githubusercontent.com/WEG-Technology/mock/refs/heads/main/mock-one';
    public $listId = 1;
    public $response;

    public function __construct()
    {
        $this->response = Http::get($this->apiUrl);
    }

    public function getList()
    {
        $jsonArrayList = $this->response->json();

        foreach ($jsonArrayList as $jsonArray) {
            $title = $jsonArray['id'];
            $difficulty = $jsonArray['value'];
            $time = $jsonArray['estimated_duration'];

            $this->saveData($this->listId, $title, $title, $time, $difficulty);
        }

        return true;
    }
}
