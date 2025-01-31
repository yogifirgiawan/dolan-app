<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            [
                'username'=>'User One',
                'nama_wisata'=>'Lawang Sewu',
                'total_ticket'=>10,
                'bukti_pembayaran'=>'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276403/abp/bukti_h59ysy.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'User One',
                'nama_wisata'=>'Gua Sunyaragi',
                'total_ticket'=>12,
                'bukti_pembayaran'=>'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276403/abp/bukti_h59ysy.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'User Two',
                'nama_wisata'=>'Lawang Sewu',
                'total_ticket'=>5,
                'bukti_pembayaran'=>'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276403/abp/bukti_h59ysy.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'User Two',
                'nama_wisata'=>'Lawang Sewu',
                'total_ticket'=>5,
                'bukti_pembayaran'=>'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276403/abp/bukti_h59ysy.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'User Three',
                'nama_wisata'=>'Jurug',
                'total_ticket'=>100,
                'bukti_pembayaran'=>'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276403/abp/bukti_h59ysy.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'username'=>'User Three',
                'nama_wisata'=>'Gua Sunyaragi',
                'total_ticket'=>11,
                'bukti_pembayaran'=>'https://res.cloudinary.com/dudfnyq5q/image/upload/v1650276403/abp/bukti_h59ysy.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ]);
    }
}
