<?php

use Illuminate\Database\Seeder;

class CreateContactsCategorys extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('contacts_categorys')->insert(['target' => 'contact', 'package' => 'Choose packages']);
        \DB::table('contacts_categorys')->insert(['target' => 'contact', 'package' => 'Small']);
        \DB::table('contacts_categorys')->insert(['target' => 'contact', 'package' => 'Medium']);
        \DB::table('contacts_categorys')->insert(['target' => 'contact', 'package' => 'Large']);
    }
}
