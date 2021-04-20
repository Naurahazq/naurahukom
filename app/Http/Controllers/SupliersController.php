<?php

namespace App\Http\Controllers;

use App\Supliers;
use Illuminate\Http\Request;

class SupliersController extends Controller
{
    public function index()
    {
        return view('supliers.index');
    }
}
