<?php

use Illuminate\Database\Seeder;
use App\Idea;

class IdeasTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(Idea::class, 25)->create();
    }
}
