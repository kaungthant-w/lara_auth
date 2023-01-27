<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function home() {
        return "this is home page";
    }

    public function about() {
        return "This is about page";
    }

    public function service() {
        return "This is service page";
    }
}
