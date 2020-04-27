<?php

use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'name' =>'Валера',
            'surname' => 'Валерьев',
        ]);

        DB::table('contacts')->insert([
            'name' =>'Инокентий',
            'surname' => 'Биденко',
        ]);

        DB::table('contacts')->insert([
            'name' =>'Жора',
            'surname' => 'Клименко',
        ]);

        DB::table('contacts')->insert([
            'name' =>'Сергей',
            'surname' => 'Дроботенко',
        ]);

        DB::table('contacts')->insert([
            'name' =>'Вася',
            'surname' => 'Валентенко',
        ]);
    }
}
