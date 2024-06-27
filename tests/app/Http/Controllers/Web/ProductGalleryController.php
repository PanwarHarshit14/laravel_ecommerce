<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductGalleryController extends Controller
{
    public function productgallery()
    {
        return view('web.screens.productgallery');
    }
}
