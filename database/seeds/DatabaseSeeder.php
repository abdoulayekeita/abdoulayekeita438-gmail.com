<?php

use Illuminate\Database\Seeder;
use   \App\models\Profile;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      Profile::create(['role'=>"admin"]);
      Profile::create(['role'=>"Particulier"]);
      Profile::create(['role'=>"Busness"]);
    }
}
