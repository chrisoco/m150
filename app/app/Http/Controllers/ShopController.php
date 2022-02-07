<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
    public function index()
    {

        if(session('c') === null) {
            session(['c' => array()]);
        }

        return view('index', [
            'items' => Item::all(),
        ]);

    }

    public function addItemToCart(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'itemID' => ['required'],
            'amount' => ['required', 'gt:0'],
        ], [

        ]);

        if($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        }


        $data = $validator->getData();

        // TODO: Validate quantity avlb.??? on checkout maybe?
        // TODO: Implement Cart (Session-based CBA)
        // TODO: Add to Cart

        $arr = session('c');
        $arr[$data['itemID']] = $data['amount'];

        session(['c' => $arr]);

        return redirect(route('index'));

    }

}
