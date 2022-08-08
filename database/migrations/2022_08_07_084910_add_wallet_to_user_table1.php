<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('btcwallet')->nullable();;
            $table->string('ethwallet')->nullable();;
            $table->string('xrpwallet')->nullable();;
            $table->string('usdtwallet')->nullable();;
            $table->string('solwallet')->nullable();;
            $table->string('dotwallet')->nullable();;
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('btcwallet');
            $table->dropColumn('ethwallet');
            $table->dropColumn('xrpwallet');
            $table->dropColumn('usdtwallet');
            $table->dropColumn('solwallet');
            $table->dropColumn('dotwallet');
        });
    }
};
