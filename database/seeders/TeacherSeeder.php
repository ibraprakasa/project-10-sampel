<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            [
                'nama_lengkap' => 'John Doe',
                'nama_panggilan' => 'John',
                'foto_profile' => 'john_doe.jpg',
                'pengalaman_mengajar' => 5,
                'jabatan' => 'Guru Matematika',
                'nomor_telepon' => '08123456789',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('password123'),
                'gedung' => 1,
            ],
            [
                'nama_lengkap' => 'Jane Smith',
                'nama_panggilan' => 'Jane',
                'foto_profile' => 'jane_smith.jpg',
                'pengalaman_mengajar' => 3,
                'jabatan' => 'Guru Bahasa Inggris',
                'nomor_telepon' => '08198765432',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('password123'),
                'gedung' => 2,
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }
}
