<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ImageController extends Controller
{
    public function index(): View
    {
        return view('images.index');
    }

    public function show()
    {
        // return all images
    }

    public function store(Request $request)
    {
        // save image (or images) to the database
    }
}
