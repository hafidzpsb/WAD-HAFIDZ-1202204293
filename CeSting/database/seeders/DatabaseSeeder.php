<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\LokasiPengecekan;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $user = [
            [
               'username'=>'Hafidz',
               'email'=>'hafidz@gmail.com',
               'type'=>'admin',
               'password'=> bcrypt('123456'),
            ],
            [
               'username'=>'Mima',
               'email'=>'mima@gmail.com',
               'type'=>'admin',
               'password'=> bcrypt('123456'),
            ],
            [
               'username'=>'Farez',
               'email'=>'farez@gmail.com',
               'type'=>'admin',
               'password'=> bcrypt('123456'),
            ],
            [
                'username'=>'Adhwaa',
                'email'=>'Adhwaa@gmail.com',
                'type'=>'admin',
                'password'=> bcrypt('123456'),
             ],
        ];
        foreach ($user as $key => $user) {
            User::create($user);
        }
        $lokasi_pengecekan = [
            [
               'rumah_sakit'=>'Rumah Sakit Umum Bina Sehat',
               'alamat'=>'Jl. Raya Dayeuhkolot No.325, Citeureup, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257',
               'no_telepon'=>'(022) 5207964',
            ],
            [
               'rumah_sakit'=>'RSUD Al Ihsan Provinsi Jawa Barat',
               'alamat'=>'Jl. Kiastramanggala, Baleendah, Kec. Baleendah, Kabupaten Bandung, Jawa Barat 40375',
               'no_telepon'=>'(022) 5940872',
            ],
            [
               'rumah_sakit'=>'Rumah Sakit Muhammadiyah Bandung',
               'alamat'=>'Jl. K.H. Ahmad Dahlan No.53, Turangga, Kec. Lengkong, Kota Bandung, Jawa Barat 40264',
               'no_telepon'=>'(022) 7301062',
            ],
            [
                'rumah_sakit'=>'RS Sartika Asih Bandung',
                'alamat'=>'Jl. Moh. Toha No.369, Ciseureuh, Kec. Regol, Kota Bandung, Jawa Barat 40256',
                'no_telepon'=>'(022) 5229544',
             ],
             [
                'rumah_sakit'=>'Rumah Sakit Umum Pindad',
                'alamat'=>'Jl. Gatot Subroto No.517, Sukapura, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40285',
                'no_telepon'=>'(022) 7322877',
             ],
             [
                'rumah_sakit'=>'RS Humana Prima',
                'alamat'=>'Jl. Rancabolang No.21, Manjahlega, Kec. Rancasari, Kota Bandung, Jawa Barat 40286',
                'no_telepon'=>'(022) 7563701',
             ],
             [
                'rumah_sakit'=>'RSIA Harapan Bunda',
                'alamat'=>'Jalan Pluto Raya Blok C, Margahayu Raya, Margasari, Buahbatu, Margasari, Kec. Buahbatu, Kota Bandung, Jawa Barat 40218',
                'no_telepon'=>'(022) 7506490',
             ],
        ];
        foreach ($lokasi_pengecekan as $key => $lokasi_pengecekan) {
            LokasiPengecekan::create($lokasi_pengecekan);
        }
    }
}
