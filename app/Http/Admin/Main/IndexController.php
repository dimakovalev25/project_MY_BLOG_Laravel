<?php

namespace App\Http\Admin\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return 'admin';


    }
}
