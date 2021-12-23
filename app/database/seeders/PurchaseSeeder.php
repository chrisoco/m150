<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Purchase;
use App\Models\PurchaseHasItems;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach (Purchase::all() as $purchase) {

            for($i = 0; $i < rand(1, 5); $i++) {
                PurchaseHasItems::create([
                    'purchase_id' => $purchase->id,
                    'item_id' => Item::all()->random()->id,
                    'quantity' => rand(1, 10),
                ]);
            }

        }

        foreach (Purchase::all() as $purchase) {
            $price = 0.0;

            foreach ($purchase->purchaseHasItems as $phi) {
                $price += $phi->quantity * $phi->item->price;
            }

            $purchase->update(['price' => $price]);
        }

    }
}

