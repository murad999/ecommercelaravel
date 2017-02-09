<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\User::class,3)->create();

    	 DB::table('products')->insert([/*[
            'catagory_id' => '1',
            'title' => 'mouse',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'price' => '100',
            'img' => 'jpg',
            'status' => 'active',
        ],*/
        [
            'catagory_id' => '1',
            'title' => 'keyboard',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'price' => '200',
            'img' => 'png',
            'status' => 'deactive',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]]
        );


    }
}

