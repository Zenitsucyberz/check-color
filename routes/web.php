<?php

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::name('web.')->group(function () {
    Route::get('/', function () {
        return view('web.index');
    })->name('index');

    Route::get('about-us', function () {
        return view('web.about');
    })->name('about');

    Route::get('services', function () {
        return view('web.service');
    })->name('services');

    

    Route::get('contact-us', function () {
        return view('web.contact');
    })->name('contactus');


    Route::post('contact-us', function (Request $request) {

        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'company' => 'nullable',
            'phone' => 'required',
            'description' => 'required',
        ],[
            'description.required' => 'Message is required'
        ]);


        $deliveryMail = env('ADMIN_EMAIL', 'no-reply@cyberzsoftsolutions.com');
        Mail::to($deliveryMail)->send(new ContactMail($input));



        // dd($request->toArray());


        return back()->with('mail_send','Thank you for contacting us');

    })->name('contactus');

    // services
    Route::get('e-commerce', function () {
        return view('web.ecommerce');
    })->name('ecommerce');

    Route::get('software-development', function () {
        return view('web.software');
    })->name('software');

    Route::get('digital-marketing', function () {
        return view('web.digital');
    })->name('digital');

    Route::get('business-consulting', function () {
        return view('web.business');
    })->name('business');


    // ecommerce Services

    Route::get('amazon', function () {
        return view('web.amazon');
    })->name('amazon');

    Route::get('flipkart', function () {
        return view('web.flipkart');
    })->name('flipkart');

    Route::get('meesho', function () {
        return view('web.meesho');
    })->name('meesho');


});