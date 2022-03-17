<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

use App\Admin;

class AddAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            $data=[
                'name'=>"apon",
                'email'=>"abir@gmail.com",
                'email_verified_at'=>now(),
                'password'=>Hash::make(12345),
                'address'=>"Dhaka",
                'phone'=>"01853517171"
            ];
            Admin::create($data);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admins', function (Blueprint $table) {
            //
        });
    }
}
