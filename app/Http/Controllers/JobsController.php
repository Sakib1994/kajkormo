<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class JobsController extends Controller
{
    public function index(Request $req)
    {
        return Inertia::render('PrivacyPolicy', [
        ]);
    }
    
}
