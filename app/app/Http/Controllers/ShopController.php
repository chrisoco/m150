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

        $item = Item::find($data['itemID']);

        $arr = session('c');

        if(array_key_exists($data['itemID'], $arr)) {
            if($data['amount'] + $arr[$data['itemID']] <= $item->quantity_available) {
                $arr[$data['itemID']] = $data['amount'] + $arr[$data['itemID']];
            }
        } else {
            if($data['amount'] <= $item->quantity_available) {
                $arr[$data['itemID']] = $data['amount'];
            }
        }

        session(['c' => $arr]);

        return redirect(route('index'));

    }

    public function delItemFromCart($id)
    {
        $arr = session('c');
        unset($arr[$id]);

        session(['c' => $arr]);

        return redirect(route('index'));
    }

}
