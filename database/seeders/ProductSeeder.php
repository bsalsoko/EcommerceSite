<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("products")->insert([
            [
                'name'=>'Manchester United T-shirt',
                "price"=>"500",
                "description"=>"A football tshirt of the best club in the world from England",
                "category"=>"T-shirt",
                "gallery"=>"https://www.pngkey.com/png/detail/857-8571000_manchester-united-2014-15-mens-official-home-jersey.png"
            ],
            [
                'name'=>'Manchester city T-shirt',
                "price"=>"100",
                "description"=>"A football tshirt of one of the best club in the world from Manchester",
                "category"=>"T-shirt",
                "gallery"=>"https://www.si.com/.image/c_limit%2Ccs_srgb%2Cq_auto:good%2Cw_600/MTgxMjcwMTQxMzU3NTk3Nzg0/e2qdr4ixoam4q1j.webp"
            ],
            [
                'name'=>'Barcelona T-shirt',
                "price"=>"300",
                "description"=>"A football tshirt of one of the best club in the world from spain",
                "category"=>"T-shirt",
                "gallery"=>"https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/f8be2132-ed3d-495c-92ad-d94193891008/fc-barcelona-2022-23-match-third-dri-fit-adv-football-shirt-gsDdb6.png"
            ],
            
            
        ]);
    }
}
