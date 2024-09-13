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
        Grade::updateOrCreate(['name' => 'first'], [
            'name' => 'first',
        ]);
        Grade::updateOrCreate(['name' => 'second'], [
            'name' => 'second',
        ]);
        Grade::updateOrCreate(['name' => 'third'], [
            'name' => 'third',
        ]);
        Grade::updateOrCreate(['name' => 'fourth'], [
            'name'  => 'fourth',
        ]);
        Grade::updateOrCreate(['name' => ' fifth'], [
            'name' => 'fifth',
        ]);
        Grade::updateOrCreate(['name' => 'sixth'], [
            'name' => 'sixth',
        ]);
    }
}
