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
        Schema::disableForeignKeyConstraints();
        Schema::create('users', function (Blueprint $table) {

            # Basic Column
            $table->bigIncrements('id');
            $table->string('uid')->unique(); 
            $table->string('name')->nullable();                               
            $table->string('password')->nullable();                   
            $table->string('email');  
            $table->unsignedInteger('role_id');              
            $table->decimal('point')->default(0);
            $table->unsignedInteger('merchant_id')->nullable();              
            $table->unsignedInteger('status')->default(getConfig('user.status.active'));
            $table->text('meta')->nullable(); 
            $table->softDeletes();
            $table->timestamps();
                

        });

        Schema::enableForeignKeyConstraints();

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
