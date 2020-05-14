<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(ContactSeeder::class);
         //factory(App\Contact::class, 20)->create();
         factory(App\User::class, 20)->create();
         factory(App\Admin::class, 1)->create();
        
    }
}
