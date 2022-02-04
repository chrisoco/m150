<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {

        return view('index', [
            'items' => Item::all(),
        ]);

    }

    public function addItemToCart(Request $request)
    {
        // TODO: Validate quantity avlb.
        // TODO: Implement Cart (Session-based CBA)
        // TODO: Add to Cart

        ddd($request->all());
    }

}
