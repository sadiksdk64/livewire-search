<?php

use Illuminate\Database\Seeder;

class NameListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\NameList::class, 10)->create();
    }
}
