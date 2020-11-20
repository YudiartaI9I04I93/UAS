<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kategorisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            'Kategori' => 'Keyboard',
            'Keterangan' => 'Segala macam keyboard PC, Laptop, TV'
        ]);
        DB::table('kategoris')->insert([
            'Kategori' => 'Mouse',
            'Keterangan' => 'Segala macam Mouse wired maupun  wireless'
        ]);
        DB::table('kategoris')->insert([
            'Kategori' => 'Flashdisk',
            'Keterangan' => 'Segala macam merek, ukuran flashdisk'
        ]);
    }
}
