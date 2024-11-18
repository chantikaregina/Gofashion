<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'key' => 'store_name',
                'value' => 'Toko Online',
                'deskripsi' => 'Nama toko yang ditampilkan di website',
            ],
            [
                'key' => 'store_address',
                'value' => 'Jl Jambu Metro',
                'deskripsi' => 'Alamat lengkap toko',
            ],
            [
                'key' => 'store_email',
                'value' => 'onlinestore@gmail.com',
                'deskripsi' => 'Email untuk kontak',
            ],
            [
                'key' => 'store_phone',
                'value' => '089876765454',
                'deskripsi' => 'Nomor telepon toko',
            ],
        ];
        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
