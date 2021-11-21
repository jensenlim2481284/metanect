<?php

namespace App\Http\Controllers\Merchant\Store;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    
    # Store index page
    public function index(Request $request)
    {
        return view('pages.merchant.store');
    }


    # What's Next : CMS Page builder
    # What's Next : Goal Management
    # What's Next : Staff management
    # What's Next : Shipping management
    # What's Next : Announcement management

}
