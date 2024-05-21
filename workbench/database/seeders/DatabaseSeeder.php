<?php

declare(strict_types=1);

namespace Workbench\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(ArabicPluralSeeder::class);
        $this->call(CommonArabicTextSeeder::class);
        //
    }
}
