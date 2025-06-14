<?php

namespace Database\Seeders;

use App\Models\FrontSetting;
use Illuminate\Database\Seeder;

class FrontSettingAdvertiseImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imageUrl = 'assets/img/logos.png';

        FrontSetting::create(['key' => 'advertise_image', 'value' => $imageUrl]);
    }
}
