<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeleteAtColumnAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('authors', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('multimedia', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('photographers', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('posters', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('questions', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('tags', function (Blueprint $table) {
            $table->softDeletes();
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
            $table->dropSoftDeletes();
        });
        Schema::table('authors', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('multimedia', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('photographers', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('posters', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('questions', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('tags', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
