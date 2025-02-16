<?php

namespace Database\Seeders;



use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post')->insert([
            'name' => Str::random(10),
            'description' => Str::random(10),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
