<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIntroToPostTranslationsTable extends Migration
{
    public function up()
    {
        Schema::table('blog__post_translations', function (Blueprint $table) {
            $table->text('intro')->nullable()->after('title');
        });
    }

    public function down()
    {
        Schema::table('blog__post_translations', function (Blueprint $table) {
            $table->dropColumn('intro');
        });
    }
}
