<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(ContractorTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(PriorityTableSeeder::class);
        $this->call(WorkOrderTableSeeder::class);
        $this->call(AddressTableSeeder::class);
    }
}
