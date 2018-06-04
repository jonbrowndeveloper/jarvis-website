<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        /* first element of the array is the filepath with regards to the project. Backslash is included*/
        $nav = [
            '' => 'Home',
            'register' => 'Register',
        ];
        View::share(['nav' => $nav]);
    }

    public function home()
    {
        return view('main.home');
    }

    public function register()
    {
        return view('main.register');
    }
}
