<?php

namespace Peeyush\ContactUs\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Peeyush\ContactUs\Models\ContactUs;
use Peeyush\ContactUs\Mail\ContactUsMailable;

class ContactUsController extends Controller
{
    //
    public function index()
    {
        return view('contact-us::contact-us');
    }

    public function send(Request $request)
    {
        // dd($request->input('name'));
        Mail::to('peeyush.sparta415@gmail.com')->send(new ContactUsMailable($request->input('query'),$request->input('name')));
       $contact_us=ContactUs::create($request->all());
       return redirect()->route('contact-us.contact-us.index');
    }
}
