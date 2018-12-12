<?php

namespace App\Http\Controllers;

use GraphAware\Neo4j\Client\ClientBuilder;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{   
    protected function getClient() {
        $client = ClientBuilder::create()
        ->addConnection('bolt', 'bolt://neo4j:password@localhost:7687')
        ->build();

        return $client;
    }
}
