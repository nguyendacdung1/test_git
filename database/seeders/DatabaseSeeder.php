<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'CodeLean',
                'email' => 'CodeLean@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => '',
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => '',
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 3,
                'name' => 'Shane Lynch',
                'email' => 'ShaneLynch@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-0.png',
                'level' => 2,
                'description' => 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo'
            ],
            [
                'id' => 4,
                'name' => 'Brandon Kelley',
                'email' => 'BrandonKelley@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.png',
                'level' => 2,
                'description' => null,
            ],
            [
                'id' => 5,
                'name' => 'Roy Banks',
                'email' => 'RoyBanks@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.png',
                'level' => 2,
                'description' => null,
            ],
        ]);
        DB::table('authors')->insert([
            [
                'name' =>'Nguy???n Nh???t ??nh',
                'avatar' => 'nguyen-nhat-anh.png',
                'description'=>'Except sint occaecat cupidatat non proident, sunt culpa qui officia deserunt mollit.'
            ],
            [
                'name' =>'Trang H???',
                'avatar' => 'trang-ha.jpg',
                'description'=>'Except sint occaecat cupidatat non proident, sunt culpa qui officia deserunt mollit.'

            ],
            [
                'name' =>'Nguy???n Phong Vi???t',
                'avatar' => 'phong-viet.jpg',
                'description'=>'Except sint occaecat cupidatat non proident, sunt culpa qui officia deserunt mollit.'
            ],
            [
                'name' =>'Anh Khang',
                'avatar' => 'anh-khang.jpg',
                'description'=>'Except sint occaecat cupidatat non proident, sunt culpa qui officia deserunt mollit.'
            ],
            [
                'name' =>'Nguy???n Ng???c Th???ch',
                'avatar' => 'default-avatar.png',
                'description'=>''
            ],
            [
                'name' =>'Hamlet Tr????ng',
                'avatar' => 'default-avatar.png',
                'description'=>''
            ],
            [
                'name' =>'Iris Cao',
                'avatar' => 'default-avatar.png',
                'description'=>''
            ],
            [
                'name'=>'S??n Paris',
                'avatar' => 'default-avatar.png',
                'description'=>''
            ],
            [
                'name'=>'D????ng Th???y',
                'avatar' => 'default-avatar.png',
                'description'=>''
            ],
            [
                'name'=>'Rosie Nguy???n',
                'avatar' => 'default-avatar.png',
                'description'=>''
            ]
        ]);
        DB::table('product_categories')->insert([
            [
                'id'=>1,
                'name'=>'Cookery' //N???u ??n
            ],
            [
                'id'=>2,
                'name'=>'Annals' //S??ch v??? l???ch s???
            ],
            [
                'id'=>3,
                'name'=>'Skill'//K?? n??ng s???ng
            ],
            [
                'id'=>4,
                'name'=>'Literary'//V??n h???c
            ],
            [
                'id'=>5,
                'name'=>'Language' //Ngo???i ng???
            ],
            [
                'id'=>6,
                'name'=>'Technology'//C??ng ngh???
            ],[
                'id'=>7,
                'name'=>'Marketing'
            ],
            [
                'id'=>8,
                'name'=>'Reference' //S??ch tham kh???a
            ],
            [
                'id'=>9,
                'name'=>'Comic' //Truy???n tranh
            ],
            [
                'id'=>10,
                'name'=>'Health' //S???c kh???e
            ],
            [
                'id'=>11,
                'name'=>'Culture' //V??n h??a t??n gi??o
            ],
            [
                'id'=>12,
                'name'=>'Textbook' //S??ch gi???o khoa
            ],[
                'id'=>13,
                'name'=>'Detective' //Trinh th??m
            ],
            [
                'id'=>14,
                'name'=>'Love' //T??nh y??u
            ],[
                'id'=>15,
                'name'=>'Jokes'//Truy???n c?????i
            ],
            [
                'id'=>16,
                'name'=>'Philosophy' //Tri???t h???c
            ]


        ]);

        DB::table('products')->insert([
            [
                'name'=>'Ng??? Ph??p Ti???ng H??n C?? B???n',
                'author_id'=>1,
                'nxb'=>'NXB ?????i H???c S?? Ph???m',
                'product_category_id'=>5,
                'description'=>'',
                'content'=>'',
                'type'=>1,//1 l?? b??a c???ng
                'weight'=>27,
                'height'=>45,
                'width'=>20,
                'pages'=>200,
                'pub_year'=>'2021',
                'qty'=>20,
                'price'=>3,
                'discount'=>1,
                'featured'=>1,
            ],
            [
                'name'=>'T??? ??i???n L??o ??? Vi???t',
                'author_id'=>1,
                'nxb'=>'NXB T???ng H???p TP.HCM',
                'product_category_id'=>5,
                'description'=>'',
                'content'=>'',
                'type'=>1,//1 l?? b??a c???ng
                'weight'=>27,
                'height'=>45,
                'width'=>20,
                'pages'=>200,
                'pub_year'=>'2021',
                'qty'=>20,
                'price'=>4,
                'discount'=>1,
                'featured'=>1,
            ],
            [
                'name'=>'T??? H???c Ti???ng Anh Hi???u Qu???',
                'author_id'=>1,
                'nxb'=>'NXB Thanh Ni??n',
                'product_category_id'=>5,
                'description'=>'',
                'content'=>'',
                'type'=>1,//1 l?? b??a c???ng
                'weight'=>27,
                'height'=>45,
                'width'=>20,
                'pages'=>200,
                'pub_year'=>'2021',
                'qty'=>20,
                'price'=>2.5,
                'discount'=>1,
                'featured'=>1,
            ],
            [
                'name'=>'3000 T??? V???ng Ti???ng Anh Th??ng D???ng Nh???t',
                'author_id'=>1,
                'nxb'=>'NXB Thanh Ni??n',
                'product_category_id'=>5,
                'description'=>'',
                'content'=>'',
                'type'=>1,//1 l?? b??a c???ng
                'weight'=>27,
                'height'=>45,
                'width'=>20,
                'pages'=>200,
                'pub_year'=>'2021',
                'qty'=>20,
                'price'=>3,
                'discount'=>1,
                'featured'=>1,
            ],
            [
                'name'=>'360 ?????ng T??? B???t Quy T???c ?????y ?????',
                'author_id'=>1,
                'nxb'=>'NXB Th???i ?????i',
                'product_category_id'=>5,
                'description'=>'',
                'content'=>'',
                'type'=>1,//1 l?? b??a c???ng
                'weight'=>27,
                'height'=>45,
                'width'=>20,
                'pages'=>200,
                'pub_year'=>'2021',
                'qty'=>20,
                'price'=>2,
                'discount'=>1,
                'featured'=>1,
            ],
            [
                'name'=>'Gi???i B??i T???p ?????i S??? 10',
                'author_id'=>1,
                'nxb'=>'NXB ?????i H???c Qu???c Gia H?? N???i',
                'product_category_id'=>8,
                'description'=>'',
                'content'=>'',
                'type'=>1,//1 l?? b??a c???ng
                'weight'=>27,
                'height'=>45,
                'width'=>20,
                'pages'=>200,
                'pub_year'=>'2021',
                'qty'=>20,
                'price'=>4.2,
                'discount'=>1,
                'featured'=>1,
            ],
            [
                'name'=>'Gi???i B??i T???p H??nh H???c 10 (N??ng Cao)',
                'author_id'=>1,
                'nxb'=>'NXB ?????i H???c Qu???c Gia H?? N???i',
                'product_category_id'=>8,
                'description'=>'',
                'content'=>'',
                'type'=>1,//1 l?? b??a c???ng
                'weight'=>27,
                'height'=>45,
                'width'=>20,
                'pages'=>200,
                'pub_year'=>'2021',
                'qty'=>20,
                'price'=>3.9,
                'discount'=>1,
                'featured'=>1,
            ],
            [
                'name'=>'Gi???i B??i T???p V???t L?? 10 (C?? B???n)',
                'author_id'=>1,
                'nxb'=>'NXB ?????i H???c Qu???c Gia H?? N???i',
                'product_category_id'=>8,
                'description'=>'',
                'content'=>'',
                'type'=>1,//1 l?? b??a c???ng
                'weight'=>27,
                'height'=>45,
                'width'=>20,
                'pages'=>200,
                'pub_year'=>'2021',
                'qty'=>20,
                'price'=>3.9,
                'discount'=>1,
                'featured'=>1,
            ],
            [
                'name'=>'Gi???i B??i T???p V???t L?? 10 (N??ng Cao)',
                'author_id'=>1,
                'nxb'=>'NXB ?????i H???c Qu???c Gia H?? N???i',
                'product_category_id'=>8,
                'description'=>'',
                'content'=>'',
                'type'=>1,//1 l?? b??a c???ng
                'weight'=>27,
                'height'=>45,
                'width'=>20,
                'pages'=>200,
                'pub_year'=>'2021',
                'qty'=>20,
                'price'=>2.9,
                'discount'=>1,
                'featured'=>1,
            ],
            [
                'name'=>'Nh???ng B??i L??m V??n Ti??u Bi???u 10',
                'author_id'=>1,
                'nxb'=>'NXB ?????i H???c Qu???c Gia H?? N???i',
                'product_category_id'=>8,
                'description'=>'',
                'content'=>'',
                'type'=>1,//1 l?? b??a c???ng
                'weight'=>27,
                'height'=>45,
                'width'=>20,
                'pages'=>200,
                'pub_year'=>'2021',
                'qty'=>20,
                'price'=>2.5,
                'discount'=>1,
                'featured'=>1,
            ]

        ]);
        DB::table('product_images')->insert([
            [
            'product_id'=>1,
            'path'=>'npthcb_0.png'
            ],
            [
                'product_id'=>1,
                'path'=>'npthcb_1.png'
            ],
            [
                'product_id'=>1,
                'path'=>'npthcb_2.png'
            ],
            [
            'product_id'=>1,
            'path'=>'npthcb_3.png'
            ],
            [
                'product_id'=>1,
                'path'=>'npthcb_4.png'
            ],
            [
                'product_id'=>1,
                'path'=>'npthcb_5.png'
            ],

            [
                'product_id'=>2,
                'path'=>'tdlv_0.png'
            ],
            [
                'product_id'=>2,
                'path'=>'tdlv_1.png'
            ],
            [
                'product_id'=>2,
                'path'=>'tdlv_2.png'
            ],
            [
                'product_id'=>2,
                'path'=>'tdlv_3.png'
            ],
            [
                'product_id'=>2,
                'path'=>'tdlv_4.png'
            ],
            [
                'product_id'=>2,
                'path'=>'tdlv_5.png'
            ],

            [
                'product_id'=>3,
                'path'=>'thtahq_0.png'
            ],
            [
                'product_id'=>3,
                'path'=>'thtahq_1.png'
            ],
            [
                'product_id'=>3,
                'path'=>'thtahq_2.png'
            ],
            [
                'product_id'=>3,
                'path'=>'thtahq_3.png'
            ],
            [
                'product_id'=>3,
                'path'=>'thtahq_4.png'
            ],
            [
                'product_id'=>3,
                'path'=>'thtahq_5.png'
            ],

            [
                'product_id'=>4,
                'path'=>'3000-tu-vung-tieng-anh-thong-dung-nhat_0.png'
            ],
            [
                'product_id'=>4,
                'path'=>'3000-tu-vung-tieng-anh-thong-dung-nhat_1.png'
            ],
            [
                'product_id'=>4,
                'path'=>'3000-tu-vung-tieng-anh-thong-dung-nhat_2.png'
            ],
            [
                'product_id'=>4,
                'path'=>'3000-tu-vung-tieng-anh-thong-dung-nhat_3.png'
            ],
            [
                'product_id'=>4,
                'path'=>'3000-tu-vung-tieng-anh-thong-dung-nhat_4.png'
            ],
            [
                'product_id'=>4,
                'path'=>'3000-tu-vung-tieng-anh-thong-dung-nhat_5.png'
            ],

            [
                'product_id'=>5,
                'path'=>'360-dong-tu-bat-quy-tac-day-du_0.png'
            ],
            [
                'product_id'=>5,
                'path'=>'360-dong-tu-bat-quy-tac-day-du_1.png'
            ],
            [
                'product_id'=>5,
                'path'=>'360-dong-tu-bat-quy-tac-day-du_2.png'
            ],
            [
                'product_id'=>5,
                'path'=>'360-dong-tu-bat-quy-tac-day-du_3.png'
            ],
            [
                'product_id'=>5,
                'path'=>'360-dong-tu-bat-quy-tac-day-du_4.png'
            ],
            [
                'product_id'=>5,
                'path'=>'360-dong-tu-bat-quy-tac-day-du_5.png'
            ],
            [
                'product_id'=>6,
                'path'=>'ds10_0.png'
            ],
            [
                'product_id'=>6,
                'path'=>'ds10_1.png'
            ],
            [
                'product_id'=>6,
                'path'=>'ds10_2.png'
            ],
            [
                'product_id'=>6,
                'path'=>'ds10_3.png'
            ],
            [
                'product_id'=>6,
                'path'=>'ds10_4.png'
            ],
            [
                'product_id'=>6,
                'path'=>'ds10_5.png'
            ]

            ,
            [
                'product_id'=>7,
                'path'=>'ds10_0.png'
            ],
            [
                'product_id'=>7,
                'path'=>'ds10_1.png'
            ],
            [
                'product_id'=>7,
                'path'=>'ds10_2.png'
            ],
            [
                'product_id'=>7,
                'path'=>'ds10_3.png'
            ],
            [
                'product_id'=>7,
                'path'=>'ds10_4.png'
            ],
            [
                'product_id'=>7,
                'path'=>'ds10_5.png'
            ]

            ,
            [
                'product_id'=>8,
                'path'=>'ds10_0.png'
            ],
            [
                'product_id'=>8,
                'path'=>'ds10_1.png'
            ],
            [
                'product_id'=>8,
                'path'=>'ds10_2.png'
            ],
            [
                'product_id'=>8,
                'path'=>'ds10_3.png'
            ],
            [
                'product_id'=>8,
                'path'=>'ds10_4.png'
            ],
            [
                'product_id'=>8,
                'path'=>'ds10_5.png'
            ]

            ,
            [
                'product_id'=>9,
                'path'=>'ds10_0.png'
            ],
            [
                'product_id'=>9,
                'path'=>'ds10_1.png'
            ],
            [
                'product_id'=>9,
                'path'=>'ds10_2.png'
            ],
            [
                'product_id'=>9,
                'path'=>'ds10_3.png'
            ],
            [
                'product_id'=>9,
                'path'=>'ds10_4.png'
            ],
            [
                'product_id'=>9,
                'path'=>'ds10_5.png'
            ]

            ,
            [
                'product_id'=>10,
                'path'=>'ds10_0.png'
            ],
            [
                'product_id'=>10,
                'path'=>'ds10_1.png'
            ],
            [
                'product_id'=>10,
                'path'=>'ds10_2.png'
            ],
            [
                'product_id'=>10,
                'path'=>'ds10_3.png'
            ],
            [
                'product_id'=>10,
                'path'=>'ds10_4.png'
            ],
            [
                'product_id'=>10,
                'path'=>'ds10_5.png'
            ]


        ]);
    }
}
