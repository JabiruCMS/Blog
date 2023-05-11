<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {
            Schema::table('blog__posts', function (Blueprint $table) {
                $table->dropColumn('locale');
            });
        } catch (\Illuminate\Database\QueryException $e) {
            // if the locale column does not exist, no need to do anything
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // backwards compatible migration - fix only for broken installations
    }
};
