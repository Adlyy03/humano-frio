<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaSeeder extends Seeder
{
    public function run()
    {
        DB::table('anggotas')->insert([
            [
                'nama' => 'Raafi Muhamad Fajar',
                'role' => 'Back-end Developer',
                'foto' => 'https://randomuser.me/api/portraits/men/32.jpg',
                'linkedin' => '#',
                'github' => '#',
                'instagram' => '#',
                'skills' => 'Node.js,Express,MongoDB',
                'quote' => 'Building scalable backend systems is my passion.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Adli Fajriyansyah',
                'role' => 'Front-end Developer',
                'foto' => 'https://randomuser.me/api/portraits/men/12.jpg',
                'linkedin' => '#',
                'github' => '#',
                'instagram' => '#',
                'skills' => 'Laravel,Tailwind,React',
                'quote' => 'Designing UI with modern frameworks.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
