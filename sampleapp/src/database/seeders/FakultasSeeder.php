<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fakultas::create([
            'day' => 'Selasa',
            'date' => '2027-03-13',
            'start_time' => '13:00:00',
            'end_time' => '15:00:00',
            'duration' => '2 Jam',
            'subject_name' => 'Kalkulus 1',
            'subject_id' => '1203',
            'teacher_name' => 'Suryani',
            'room' => 'Hall 407',
            'student_score' => 'Masih Dalam Proses Pembelajaran'
        ]);
    }
}
