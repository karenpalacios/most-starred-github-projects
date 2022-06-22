<?php
include_once('controllers/BaseController.php');

class SyncController extends BaseController {

    function index() {
        $client = new GuzzleHttp\Client();
        $resource =  'https://api.github.com/search/repositories?q=language:php&sort=stars&order=desc';
        $response = $client->request('GET',$resource );
        $result   = $response->getBody()->getContents();
    }

}