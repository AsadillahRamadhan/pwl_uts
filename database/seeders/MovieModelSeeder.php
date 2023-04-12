<?php

namespace Database\Seeders;

use App\Models\MovieModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $film = [
            [
                "kode" => "F001",
                "judul" => "Spider-Man: No Way Home",
                "genre" => "Action",
                "sutradara" => "Jon Watts",
                "durasi" => "150 menit",
                "tanggal_rilis" => "2021-12-17",
                "rating" => "8.5/10",
                "jam_tayang" => "10:00, 13:00, 16:00, 19:00"
            ],
            [
                "kode" => "F002",
                "judul" => "Dune",
                "genre" => "Science Fiction",
                "sutradara" => "Denis Villeneuve",
                "durasi" => "155 menit",
                "tanggal_rilis" => "2021-10-22",
                "rating" => "8.3/10",
                "jam_tayang" => "11:30, 14:30, 17:30, 20:30"
            ],
            [
                "kode" => "F003",
                "judul" => "The French Dispatch",
                "genre" => "Comedy",
                "sutradara" => "Wes Anderson",
                "durasi" => "108 menit",
                "tanggal_rilis" => "2021-10-22",
                "rating" => "7.8/10",
                "jam_tayang" => "12:00, 15:00, 18:00, 21:00"
            ],
            [
                "kode" => "F004",
                "judul" => "No Time to Die",
                "genre" => "Action",
                "sutradara" => "Cary Joji Fukunaga",
                "durasi" => "163 menit",
                "tanggal_rilis" => "2021-10-08",
                "rating" => "7.5/10",
                "jam_tayang" => "10:30, 13:30, 16:30, 19:30"
            ],
            [
                "kode" => "F005",
                "judul" => "Black Widow",
                "genre" => "Action",
                "sutradara" => "Cate Shortland",
                "durasi" => "134 menit",
                "tanggal_rilis" => "2021-07-09",
                "rating" => "7.3/10",
                "jam_tayang" => "11:15, 14:15, 17:15, 20:15"
            ]
            ];
            foreach ($film as $f){
                MovieModel::create($f);
            }
        
    }
}
