<?php

namespace Database\Seeders;

use App\Models\Purchase;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->has(
            Purchase::factory()->count(3)
        )->create();

        User::find(1)->update([
            'email' => 'admin@appli.ch',
            'firstname' => 'Admin',
            'name' => 'Admin',
        ]);

    }
}

