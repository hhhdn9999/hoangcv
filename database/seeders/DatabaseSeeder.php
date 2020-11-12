<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'id' => 1,
            'name' => 'HUYNH HUY HOANG',
            'email' => 'huynhhuyhoang9999@gmail.com',
            'password' => '$2y$10$HMK5OrWEvb2vAK/rKJkVlOcx03QNbmQsyW4BT2Ykw9Yq0V1.YNbrq',
            'profile_photo_path' => 'https://lh3.googleusercontent.com/tgnlHRvBYNeVEDqFCaKCxD809G0mQ3O31Eu8dc0GnU78O4OPN76eMC_S-vGAThz80d1SGmNLyzXYOULT87CUGXQleivW9Ml-uReFKSlEbi_Iu9byE5k5MWrwjQBkfgErZOdYwwy1_N4IITnrId0WS2XQKGQz8vyeFXBpy3nlyujMDKl3dr0avZUCMixJgTnKm2VibmsBgL622kaj6tll5_H-tUGmEGWssYHfyRwI1ulcjzUhayxNBvaWuY4ffOy35Cr1mQlco-h9L1NEKJOWEZ5HzfEreS0gsGMeF9e4vNE1RAfa0XtFjyqAfcZ5c-7QwTicCBCvKs4_yqf6Ym6pkusxLKom241eYKYMfrJtcEyrStufc0qvWRGTHIGJ1hdrq0dXY246Qt1BqRyDgVcj9gH9FAupF86x3R96QneunUU9zFbqtwGyWd3yWjbrnwLVB8moXzyGa9PeBbYwXyd3MhsTxVKuVSeoHgFOEdbGyxshjCGbXzlTT-MoRFn2Uj0O1_wf1ga0RuLkaXXxGNJtcLWmzDPeKou8QQ6CQ6PvhyA2mdWHIK7DCMHeCNfdxyULWeAUrzJ3lny7kl4D81II9H5IiquQqnZ8Jf2ybrrOdwWeMcv-Gw0Xf04dJ0ctQ6lXW2E57cJkAiuhVeLQ6I5L6BNMthY7qCh8qzJYp19YTfJVDRmJc8PX7ZJBgbVr=w917-h949-no?authuser=0',
            'introduce_myself' => 'I am Hoang , 22 tuổi, hiện tại đang sinh sống và làm việc tại Đà nẵng, nghề nghiệp là coder phát triển website',
            'language' => 'C++, PHP, Laravel   ',
            'helper_language' => 'html, css, js, boostrap, jquery',
            'vitriungtuyen' => 'Fersher',
            'hedieuhanh' => 'windown, ubuntu',
            'tool' => 'git, visual code, phpstorm, sublime text,..',
            'git' => 'https://github.com/hhhdn9999',
            'facebook' => 'https://www.facebook.com/hhhdn9999/',
            'blog' => 'https://www.facebook.com/hhhdn9999/',
            'youtube' => 'https://www.youtube.com/channel/UC12filbCJBjEn7hwyNXHGOg?view_as=subscriber',
            'zalo' => 'https://chat.zalo.me/',
            'phone' => '+84 335 999 943',
            'address' => 'Hoa Vang - Da Nang',
            'muctieu_nghenghiep' => 'Mục tiêu của bản thân 1 – 3 năm tới là trở thành Full stack developer,  thành thạo được Laravel và Vuejs',
            'hocvan' => 'Tốt nghiệp  Đại học Sư phạm Đà nẵng, bằng Trung bình, Điểm hệ 4 : 2.49đ',
            'kinhnghiem_lamviec' => 'Đã thực tập lại Sun * bắt đầu vào tháng 13 - 07-2020 kết thúc 9 - 2020 với tên project Food and Drink . Vai trò trong project là coder, review code',
            'cac_du_an_canhan' => 'http://hoangstore.herokuapp.com/     , Đây là project môn đồ án chuyên nghành với tên để tài là website cửa hàng bán đồ điện tử',
            'ky_nang_chuyen_mon' => 'Phát triển các sản phẩm website với ngôn ngữ PHP, framework Laravel, Mysql',
            'mot_so_thong_tin_khac' => '.................Tính tình : Khiêm tốn, thật thà, dũng cảm, không sợ gì hết, chỉ sợ rắn ................. Sở thích : thích nghe nhạc, xem phim ở rạp, đá bóng, thích xe phân khối lớn, dạo phố ban đêm, ngồi chém gió với bạn bè,..                      ',
        ]);
    }
}
