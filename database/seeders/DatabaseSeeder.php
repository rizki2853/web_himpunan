<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Divisi;
use App\Models\Gallery;
use App\Models\Kegiatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Divisi::factory(5)->create();
        Kegiatan::factory(15)->create();
        Gallery::factory(20)->create();

        User::create([
            'name' => 'Giri Restu Aji',
            'nim' => 'F1D0190001',
            'password' => '123',
            'jabatan' => 'ketua himpunan',
            'masa_jabatan' => '2019-2020',
            'divisi_id' => 1,
            'foto' => 'inti-ketum.png',
            'status' => true,
            'ig' => 'https://instagram.com/rizkialdi_s?igshid=YmMyMTA2M2Y='
        ]);

        User::create([
            'name' => 'Pangeran',
            'nim' => 'F1D0180001',
            'password' => '123',
            'jabatan' => 'ketua himpunan',
            'masa_jabatan' => '2018-2019',
            'divisi_id' => 1,
            'foto' => 'pemda-ran.png',
            'status' => false,
            'ig' => 'https://instagram.com/rizkialdi_s?igshid=YmMyMTA2M2Y='
        ]);

        User::create([
            'name' => 'Rifqi',
            'nim' => 'F1D0170001',
            'password' => '123',
            'jabatan' => 'ketua himpunan',
            'masa_jabatan' => '2017-2018',
            'divisi_id' => 1,
            'foto' => 'pemda-ari.png',
            'status' => false,
            'ig' => 'https://instagram.com/rizkialdi_s?igshid=YmMyMTA2M2Y='
        ]);

        User::create([
            'name' => 'Hasbi',
            'nim' => 'F1D0160001',
            'password' => '123',
            'jabatan' => 'ketua himpunan',
            'masa_jabatan' => '2016-2017',
            'divisi_id' => 1,
            'foto' => 'pemda-hasbi.png',
            'status' => false,
            'ig' => 'https://instagram.com/rizkialdi_s?igshid=YmMyMTA2M2Y='
        ]);

        User::create([
            'name' => 'Daus',
            'nim' => 'F1D0150001',
            'password' => '123',
            'jabatan' => 'ketua himpunan',
            'masa_jabatan' => '2015-2016',
            'divisi_id' => 1,
            'foto' => 'advo-daus.png',
            'status' => false,
            'ig' => 'https://instagram.com/rizkialdi_s?igshid=YmMyMTA2M2Y='
        ]);

        User::create([
            'name' => 'Nadya',
            'nim' => 'F1D0140001',
            'password' => '123',
            'jabatan' => 'ketua himpunan',
            'masa_jabatan' => '2014-2015',
            'divisi_id' => 1,
            'foto' => 'advo-nadya.png',
            'status' => false,
            'ig' => 'https://instagram.com/rizkialdi_s?igshid=YmMyMTA2M2Y='
        ]);
    }
}
