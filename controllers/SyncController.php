<?php
include_once('controllers/BaseController.php');

class SyncController extends BaseController {

    function index() {
        $client   = new GuzzleHttp\Client();
        $resource = 'https://api.github.com/search/repositories?q=language:php&sort=stars&order=desc&per_page=10&page=1';
        $response = $client->request('GET',$resource );
        $result   = $response->getBody()->getContents();
        $result   = json_decode($result);

        $repositories = new Repositories();

        // @TODO Truncate table on every sync

        $i = 0;
        foreach($result->items as $item) {
            $data = [
                'repository_id' => $item->id,
                'name' => $item->name,
                'url' => $item->html_url,
                'created_at' => $item->created_at,
                'pushed_at' => $item->pushed_at,
                'description' => $item->description, 
                'stars' => $item->stargazers_count           
            ];
            $repositories->save($data);
        }
    }

}