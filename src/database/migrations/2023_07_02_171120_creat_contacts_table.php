<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->enum('gender', ['male', 'female']);
            $table->string('email');
            $table->char('post', 8);
            $table->string('address');
            $table->string('build');
            $table->text('option')->nullable();
            $table->timestamps();
        });
    }
//         //テーブル定義できたらphp artisan migrate

//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
    public function down()
    {
        //
    }
}