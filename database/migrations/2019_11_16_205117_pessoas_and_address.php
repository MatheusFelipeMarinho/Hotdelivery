<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class pessoasandaddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('person', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('master_user_id')->unsigned();
            $table->foreign('master_user_id')->references('id')->on('master_user')->onDelete('cascade');

            $table->tinyInteger('is_client');

            $table->tinyInteger('is_vendor');

            $table->string('name', 200);
            
            $table->string('alias', 200)->nullable();

            $table->enum('person_type', ['f', 'j']);

            $table->string('cpf', 11)->nullable();

            $table->unique(['master_user_id', 'cpf']);

            $table->unique(['master_user_id', 'cnpj']);
            
            $table->string('rg', 30)->nullable();
            
            $table->string('inscricao_pr', 30)->nullable();
            
            $table->string('cnpj', 15)->nullable();
            
            $table->string('inscricao_estadual', 30)->nullable();

            $table->tinyInteger('inscricao_estadual_isento')->nullable();

            $table->string('inscricao_municipal', 30)->nullable();

            $table->string('phone_wa')->nullable();
           
            $table->string('phone2')->nullable();
            
            $table->string('phone3')->nullable();
         
            $table->string('phone4')->nullable();
          
            $table->string('email1')->nullable();

            $table->string('email2')->nullable();

            $table->string('website')->nullable();

            $table->string('notes', 1000)->nullable();

            $table->tinyInteger('status');

            $table->timestamps();
            
        });


        Schema::create('city', function (Blueprint $table) {
            
            $table->increments('id'); // ibge id
            
            $table->string('city', 200);

            $table->string('state', 2);
            
            $table->string('state_id', 2)->nullable();
        
        });


        Schema::create('address', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('master_user_id')->unsigned();
            $table->foreign('master_user_id')->references('id')->on('master_user')->onDelete('cascade');

            $table->string('foreign_table', 100);
            
            $table->integer('foreign_id')->unsigned();
            
            $table->enum('address_type', ['main', 'billing', 'delivery']);
            
            $table->string('address', 200)->nullable();
            
            $table->string('number', 50)->nullable();
            
            $table->string('complement', 200)->nullable();
            
            $table->string('district', 200)->nullable();
            
            $table->string('zipcode', 10)->nullable();
            
            $table->integer('city_id')->unsigned()->nullable();

            $table->string('city', 200)->nullable();

            $table->string('state', 200)->nullable();
            
            $table->string('state_id', 2)->nullable();
        
            $table->tinyInteger('status');

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
        Schema::drop('address');
        
        Schema::drop('city');
        
        Schema::drop('person');
    }
}
