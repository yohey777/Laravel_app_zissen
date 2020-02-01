<?php
namespace App\Http\Controllers;

// use App\Http\Controllers\Persson;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
namespace App\Http\Controllers;


use App\MyClasses\MyService;

use Illuminate\Http\Response;


class HelloController extends Controller
{
    function __construct(MyService $myservice)
    {
        $myservice = app('App\MyClasses\MyService');
    }


    public function index(MyService $myservice, int $id = -1)
    {
        $myservice->setId($id);
        $data = [
            'msg'=> $myservice->say($id),
            'data'=> $myservice->alldata()
        ];
        return view('hello.index', $data);
    }
}

