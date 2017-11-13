<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('permission')->insert([
            'status' => 'admin',
        ]);
       DB::table('permission')->insert([
            'status' => 'dosen',
        ]);
       DB::table('permission')->insert([
            'status' => 'mahasiswa',
        ]);
    }
}
