<?php

namespace App\Http\Controllers\Merchant\Auth;

use Auth;
use App\Models\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OnboardingController extends Controller
{

    
    # Onboarding page 
    public function index(){    
        $config = getConfig('merchant');
        return view('pages.merchant.auth.onboarding',compact('config'));
    }



    # Submit onboarding form
    public function submit(Request $request)
    {
        
        # Create store & bind to user 
        $merchant = Merchant::create(
            $request->only(['name', 'domain']) + 
            ['meta' => json_encode($request->except(['_token','name','domain']))]
        );
        Auth::user()->update(['merchant_id' => $merchant->id]);

        return redirect('/')->with([ 'message' => ['title'=> 'Congratulations your Metanect account has been created. Stronger, together with Metanect !']]);      

    }



}
