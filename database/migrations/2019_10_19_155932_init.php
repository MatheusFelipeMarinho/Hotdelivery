<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Init extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /*
         *  -- master_user
         */
        Schema::create('master_user', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string('user_name', 200);
     
            $table->string('user_email', 200);
     
            $table->string('company_name', 200);

            $table->tinyInteger('status');
            
            $table->timestamps();
        });

           
        /*
         *  -- user
         */
        Schema::create('user', function (Blueprint $table) {
          
            $table->increments('id');

            $table->integer('master_user_id')->unsigned();
            $table->foreign('master_user_id')->references('id')->on('master_user')->onDelete('cascade');

            $table->tinyInteger('is_master_user');
          
            $table->string('name', 200);

            $table->string('email', 200);
            
            $table->string('password', 200);
            
            $table->tinyInteger('status');

            $table->timestamps(); 
        });


        /*
         *  -- company
         */
        Schema::create('company', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('master_user_id')->unsigned();
            $table->foreign('master_user_id')->references('id')->on('master_user')->onDelete('cascade');
           
            $table->string('name', 200);
            
            $table->string('alias', 200)->nullable();

            $table->enum('person_type', ['f', 'j']);

            $table->string('cpf', 20)->nullable();
            
            $table->string('rg', 30)->nullable();
            
            $table->string('inscricao_pr', 30)->nullable();
            
            $table->string('cnpj', 20)->nullable();

            $table->string('cnpj_prefix', 20)->nullable();
            
            $table->string('inscricao_estadual', 30)->nullable();

            $table->tinyInteger('inscricao_estadual_isento')->nullable();

            $table->string('inscricao_municipal', 30)->nullable();

            $table->string('phone1')->nullable();

            $table->string('phone2')->nullable();

            $table->string('phone3')->nullable();

            $table->string('phone4')->nullable();

            $table->string('email1')->nullable();

            $table->string('email2')->nullable();

            $table->string('website')->nullable();

            $table->tinyInteger('status');

            $table->enum('crt', ['1', '2','3']);

            $table->string('cnae')->nullable();

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
      
        Schema::drop('company');
      
        Schema::drop('user');
      
        Schema::drop('master_user');
    }
}
