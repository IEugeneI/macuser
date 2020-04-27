<?php

use Illuminate\Database\Seeder;

class PhonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phones')->insert([
            'contact_id' =>1,
            'phone' => '+380955555555',
        ]);

        DB::table('phones')->insert([
            'contact_id' =>2,
            'phone' => '+380944444444',
        ]);

        DB::table('phones')->insert([
            'contact_id' =>3,
            'phone' => '+380911111111',
        ]);

        DB::table('phones')->insert([
            'contact_id' =>4,
            'phone' => '+380922222222',
        ]);

        DB::table('phones')->insert([
            'contact_id' =>5,
            'phone' => '+380933333333',
        ]);

        DB::table('phones')->insert([
            'contact_id' =>1,
            'phone' => '+380966666666',
        ]);

        DB::table('phones')->insert([
            'contact_id' =>1,
            'phone' => '+380977777777',
        ]);

        DB::table('phones')->insert([
            'contact_id' =>1,
            'phone' => '+380988888888',
        ]);

        DB::table('phones')->insert([
            'contact_id' =>1,
            'phone' => '+380999999999',
        ]);

        DB::table('phones')->insert([
            'contact_id' =>1,
            'phone' => '+380900000000',
        ]);
    }
}
