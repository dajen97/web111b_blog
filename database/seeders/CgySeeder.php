<?php

namespace Database\Seeders;

use Carbon\Carbon;
use faker\Factory;
use App\Models\Cgy;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CgySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Cgy::truncate(); //把資料表清空,並重製主鍵
    $faker = Factory::create('zh_TW');


    //建立資料
    /*for ($i = 0; $i <= 100; $i++) {
      // Cgy::create(['subject' => '分類' . rand(1, 1000), 'enabled' => true, 'enabled_at' => Carbon::now()->addDays(rand(0, 10))]);
      Cgy::create([
        'title' => $faker->name,
        'enabled' => true,
        'enabled_at' => Carbon::createFromFormat('Y-m-d', $faker->date),
        //
      ]);
    }*/

    Cgy::factory()->times(100)->create();
  }
}