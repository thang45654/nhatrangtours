<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipartColumnToPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->string('password');
            $table->string('job')->nullable();
            $table->string('identity_card')->nullable();
            $table->string('active_area')->nullable();
            $table->tinyInteger('payment');
            $table->string('bank')->nullable();
            $table->string('account_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->dropColumn('password');
            $table->dropColumn('job');
            $table->dropColumn('identity_card');
            $table->dropColumn('active_area');
            $table->dropColumn('payment');
            $table->dropColumn('bank');
            $table->dropColumn('account_number');
        });
    }
}
