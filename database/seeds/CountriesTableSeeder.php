<?php

namespace database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends \DatabaseSeeder
{
    /**
     * Create Countries table records
     * that WILL be created in the database
     */
    public function run()
    {
        DB::table('countries')->delete();

        $countries = array(
            array(
                'id' => 1,
                'code' => 'US',
                'name' => 'United States'
            ),
            array(
                'id' => 1,
                'code' => 'US',
                'name' => 'United States'
            ),
            array(
                'id' => 1,
                'code' => 'US',
                'name' => 'United States'
            ),
            array(
                'id' => 1,
                'code' => 'US',
                'name' => 'United States'
            ),
            array(
                'id' => 1,
                'code' => 'US',
                'name' => 'United States'
            ),
            array(
                'id' => 1,
                'code' => 'US',
                'name' => 'United States'
            ),
        );
    }
}
