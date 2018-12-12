<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function create()
    {
        return view('contents.add');
    }

    public function lista()
    {
      $products = Product::All();
    	return view('contents.productsLista', ['products'=>$products]);
      //return view('contents.productsLista', compact('prodcuts'); compact resuelve el array asociativo de la línea anterior.
    }

    public function store(Request $request)
    {
      $request->validate([
          'name' => 'required|unique:products',
          'category' => 'required',
          'price' => 'required|numeric',
          'available' => 'required',
          'description' => 'required',
      ]);

      $producto = new Product;
      $producto->name = $request['name'];
      $producto->category = $request['category'];
      $producto->price = $request['price'];
      $producto->available = $request['available'];
      $producto->description = $request['description'];

      $producto->save();

      return redirect('/productsLista');
    }



   }
