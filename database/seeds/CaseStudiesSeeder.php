<?php

use Illuminate\Database\Seeder;

class CaseStudiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory('App\CaseStudy', 9)->create();
    }
}
