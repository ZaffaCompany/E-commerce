<?php

namespace App\Http\Controllers;

use App\Models\BillingSystem;
use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $additionalProducts = Product::inRandomOrder()->take(4)->get();
        $recentProducts = Product::orderBy('id', 'desc')->take(4)->get();
        return view('checkout')->with([
            'additionalProducts' => $additionalProducts,
            'recentProducts' => $recentProducts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        BillingSystem::create($request->all());
//
//        if ($billingSystem){
//            $firstName = $billingSystem->billing_first_name;
//            $lastName = $billingSystem->billing_last_name;
//            $company = $billingSystem->billing_company;
//            $adress1 = $billingSystem->billing_address_1;
//            $city = $billingSystem->billing_city;
//            $postCode = $billingSystem->billing_postcode;
//            $email = $billingSystem->billing_email;
//            $phone = $billingSystem->billing_phone;
//
//            $sendMessage = fopen();
//        }


        return redirect()->route('landing-page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        BillingSystem::create($request->all());

//        if ($billingSystem){
//            $firstName = $billingSystem->billing_first_name;
//            $lastName = $billingSystem->billing_last_name;
//            $company = $billingSystem->billing_company;
//            $adress1 = $billingSystem->billing_address_1;
//            $city = $billingSystem->billing_city;
//            $postCode = $billingSystem->billing_postcode;
//            $email = $billingSystem->billing_email;
//            $phone = $billingSystem->billing_phone;
//
//            $sendMessage = fopen();
//        }


        return redirect()->route('landing-page');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
