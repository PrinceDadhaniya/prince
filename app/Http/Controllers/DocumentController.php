<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    # ...existing code...

    public function create()
    {
        return view('admin.documents.create');
    }

    # ...existing code...
}
