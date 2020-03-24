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
            $table->bigIncrements('id');   
            $table->string('email')->unique();  
            $table->string('password');
            $table->string('name_lengkap')->nullable();
            $table->string('photo')->nullable();
            $table->string('address')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('genders_id')->nullable();
            $table->integer('jenjang_id')->nullable();
            $table->string('profesi')->nullable();
            $table->integer('users_privilege_id');
            $table->string('phone', 60)->collation('utf8_unicode_ci')->nullable()->default('NULL');
			$table->dateTime('last_login_at');
			$table->timestamp('deleted_at');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
