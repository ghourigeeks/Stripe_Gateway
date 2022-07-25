<?php

namespace App\Http\Controllers;

use DB;
use DataTables;
use App\Models\Chargee;
use Stripe;
use Session;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function stripePyament(Request $req)
    {
    	Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    	$data = Stripe\Charge::create([
    			"amount"=>150*100,
    			"currency"=>"usd",
    			"source"=>$req->stripeToken,
    			"description"=>"Geeksroot"
    	]);

	$data = Chargee::create([
		        'payment_id'=>$data['id'],
			'payer_email'=>$data['email'],
			"amount"=>150*100,
			"currency"=>"USD",
			"payment_status"=>$data['status'],			
			"token"=>$req->stripeToken
        ]);

	//  echo "<pre>"; print_r($data); die();

    	Session::flash("success","Payment successfully!");

    	return back();
    }


}
