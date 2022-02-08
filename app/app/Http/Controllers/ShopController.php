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

        /** * * * * * * * * * * * * * * * * * * * * * * * * * */

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

    public function checkout()
    {

        // CalcPriceTotal
        $total = 0;
        if(session('c') != null && count(session('c')) > 0) {
            foreach (session('c') as $key => $value) {
                $total += Item::find($key)->calcPrice($value);
            }
        }

        return view('checkout', [
            'items' => Item::all(),
            'total' => $total,
        ]);
    }

    public function buy()
    {

        if(session('c') != null && count(session('c')) > 0) {

            foreach (session('c') as $key => $value) {
                Item::find($key)->buy($value);
            }

        }

        session()->forget('c');

        return view('buy');
    }

}
