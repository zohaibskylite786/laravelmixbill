<?php

namespace Database\Seeders;

use App\Models\AppConfig;
use Illuminate\Database\Seeder;

class AppConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppConfig::create([
            'setting'=>'CompanyName',
            'value'=>'PHPMixBill'
        ]);

        AppConfig::create([
            'setting'=>'currency_code',
            'value'=>'Rp.'
        ]);
        AppConfig::create([
            'setting'=>'language',
            'value'=>'en'
        ]);
        AppConfig::create([
            'setting'=>'show-logo',
            'value'=>'1'
        ]);
        AppConfig::create([
            'setting'=>'nstyle',
            'value'=>'blue'
        ]);
        AppConfig::create([
            'setting'=>'timezone',
            'value'=>'Asia/Jakarta'
        ]);
        AppConfig::create([
            'setting'=>'dec_point',
            'value'=>''
        ]);
        AppConfig::create([
            'setting'=>'thousands_sep',
            'value'=>''
        ]);
        AppConfig::create([
            'setting'=>'rtl',
            'value'=>'0'
        ]);

        AppConfig::create([
            'setting'=>'address',
            'value'=>''
        ]);

        AppConfig::create([
            'setting'=>'phone',
            'value'=>''
        ]);

        AppConfig::create([
            'setting'=>'date_format',
            'value'=>'Y-m-d'
        ]);

        AppConfig::create([
            'setting'=>'note',
            'value'=>'Thank you...'
        ]);
    }
}
