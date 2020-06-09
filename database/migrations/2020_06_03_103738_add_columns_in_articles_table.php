<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsInArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->boolean('lock')->default(0);
            $table->integer('time_public')->nullable();
            $table->string('lang')->nullable();
            $table->string('og_image')->nullable();
            $table->text('keywords')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn([
                'lock',
                'time_public',
                'lang',
                'og_image',
                'keywords',
                ]);
        });
    }
}
