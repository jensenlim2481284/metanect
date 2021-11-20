<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    # Index page 
    public function index()
    {
        return view('website.index');
    }


    # WHAT'S NEXT - Product Page 
    # WHAT'S NEXT - Service Page 
    # WHAT'S NEXT - FAQ Page
    # WHAT'S NEXT - Contact Page 
    # WHAT'S NEXT - About Page

}
