<?php
namespace App\Http\Controllers;

// use App\Http\Controllers\Persson;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use App\MyClasses\MyService;

use Illuminate\Http\Response;


class HelloController extends Controller
{
    function __construct(MyService $myservice)
    {
        $myservice = app('App\MyClasses\MyService');
    }


   


public function index()
{
    $result = DB::table('people')->get();
    $data = [
        'msg' => 'Database access.',
        'data' => $result,
    ];
    return view('hello.index', $data);
}

}

