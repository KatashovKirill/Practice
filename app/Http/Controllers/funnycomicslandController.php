<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class funnycomicslandController extends Controller

{
    public function index()
    {
        return view('funnycomicsland.show');
    }
}
