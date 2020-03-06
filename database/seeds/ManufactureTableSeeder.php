<?php

use Illuminate\Database\Seeder;

class ManufactureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufacturers')->truncate();

        $data = array(

            array('name'=>'Muthaiga Industries'),
            array('name'=>'Juja Industries'),
        );

        foreach($data as $datum){
            DB::table('manufacurers')->insert($datum);
        }
    }
}
