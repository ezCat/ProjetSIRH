<?php

namespace App\Http\Controllers;

use App\DopTest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccueilController extends Controller
{
    public function index(){
        $documents = DopTest::get();
        return view('accueil', compact('documents'));
    }
}
