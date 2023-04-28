<?php

namespace App\Http\Controllers;

// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Traits\S3 as Aws;

class Home extends BaseController
{
    use Aws;
    
    public function __construct() {

    }

    public function index()
    {
        echo "This is home";
    }

    
}
