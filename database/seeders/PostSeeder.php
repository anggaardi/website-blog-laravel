<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data judul
        $judul = [
            'Judul Pertama',
            'Judul Kedua',
            'Judul Ketiga',
        ];

        // Iterasi untuk setiap judul
        foreach ($judul as $j) {
            // Buat slug unik
            $slug = Str::slug($j);
            $slugOri = $slug;
            $count = 1;

            while (Post::where('slug', $slug)->exists()) {
                $slug = $slugOri . '-' . $count;
                $count++;
            }

            // Masukkan data ke database
            Post::create([
                'title' => $j,
                'slug' => $slug,
                'deskripsi' => 'Deskripsi untuk ' . $j,
                'content' => 'Konten untuk ' . $j,
                'status' => 'publish',
                'user_id' => 1,
            ]);
        }
    }
}
