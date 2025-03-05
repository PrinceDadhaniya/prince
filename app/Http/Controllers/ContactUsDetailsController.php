<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsDetailsController extends Controller
{
    public function create()
    {
        return view('admin.contact-us-details.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Add your validation rules here
        ]);

        // Handle the form submission logic here

        return redirect()->back()->with('message', 'Contact-us details created successfully.');
    }
}
