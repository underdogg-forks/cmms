<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressTableSeeder extends Seeder {

/**
 * Run the database seeds.
 *
 * @return void
 */

public function run()
{
factory(LaravelEnso\AddressesManager\app\Models\Address::class,100)->create();
}


}
