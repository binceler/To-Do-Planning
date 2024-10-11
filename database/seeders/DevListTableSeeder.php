<?php

namespace Database\Seeders;

use App\Models\DevList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (! DevList::all()->count()) {
            \DB::table('dev_lists')->insert(array (
                0 =>
                    array (
                        'level' => 1,
                        'name' => 'Dev1'
                    ),
                1 =>
                    array (
                        'level' => 2,
                        'name' => 'Dev2'
                    ),
                2 =>
                    array (
                        'level' => 3,
                        'name' => 'Dev3'
                    ),
                3 =>
                    array (
                        'level' => 4,
                        'name' => 'Dev4'
                    ),
                4 =>
                    array (
                        'level' => 5,
                        'name' => 'Dev5'
                    )
            ));
        }
    }
}
