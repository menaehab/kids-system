<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Grade::updateOrCreate(['name' => 'الاول'], [
            'name' => 'الاول',
        ]);
        Grade::updateOrCreate(['name' => 'الثاني'], [
            'name' => 'الثاني',
        ]);
        Grade::updateOrCreate(['name' => 'الثالث'], [
            'name' => 'الثالث',
        ]);
        Grade::updateOrCreate(['name' => 'الرابع'], [
            'name'  => 'الرابع',
        ]);
        Grade::updateOrCreate(['name' => ' الخامس'], [
            'name' => 'الخامس',
        ]);
        Grade::updateOrCreate(['name' => 'السادس'], [
            'name' => 'السادس',
        ]);
    }
}
