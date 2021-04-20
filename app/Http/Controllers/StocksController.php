<?php

namespace App\Http\Controllers;

use App\Stocks;
use Illuminate\Http\Request;

class StocksController extends Controller
{
    public function index()
    {
        return view('stocks.index');
    }
}
