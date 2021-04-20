<?php

namespace App\Http\Controllers;

use App\Requestt;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        return view('request.index');
    }
}
