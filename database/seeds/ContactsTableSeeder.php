<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'name' => 'siddique',
            'email' => 'kisorniru@gmail.com',
            'phone' => '0123456789',
        ]);
    }
}
