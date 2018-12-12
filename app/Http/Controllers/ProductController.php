<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('contents.add');
    }

    public function lista()
    {
    	return view('contents.productsLista');
    }

      public function store(Request $request)
    {

        $validatedTodo = $request->validate([
            'name' => 'required|unique:products',
            'category' => 'required',
            'price' => 'required|numeric',
            'available' => 'required',
            'description' => 'required',
        ]);

        Product::create($request->all());

        return redirect('/productosLista');

    }
   }