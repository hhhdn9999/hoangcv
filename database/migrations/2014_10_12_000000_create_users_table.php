<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();

            $table->text('introduce_myself')->nullable();

            $table->string('language')->nullable();
            $table->string('helper_language')->nullable();
            $table->string('vitriungtuyen')->nullable();

            $table->string('hedieuhanh')->nullable();
            $table->string('tool')->nullable();

            $table->string('git')->nullable();
            $table->string('facebook')->nullable();
            $table->string('blog')->nullable();
            $table->string('youtube')->nullable();
            $table->string('zalo')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();

            $table->string('muctieu_nghenghiep')->nullable();

            $table->string('hocvan')->nullable();

            $table->string('kinhnghiem_lamviec')->nullable();

            $table->string('cac_du_an_canhan')->nullable();

            $table->string('ky_nang_chuyen_mon')->nullable();

            $table->string('mot_so_thong_tin_khac')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
