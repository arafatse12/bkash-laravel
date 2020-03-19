<?php
namespace App\Http\Controllers;

class BkashController extends Controller
{

    public function __construct()
    {

    }
    public function index()
    {
        return view('paywithbkash');
    }
    

}
