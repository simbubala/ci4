<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        
        echo json_encode(array(
            "userId"=> "simbu",
            "id"=> 12,
            "title"=> "Simbu Dashboard",
            "completed"=> false
          )) ;exit;
    }
}
