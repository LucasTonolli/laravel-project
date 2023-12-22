<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('site.category.index');
    }

   


    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        return view('site.category.show', ['slug' => $slug]);
    }
}
