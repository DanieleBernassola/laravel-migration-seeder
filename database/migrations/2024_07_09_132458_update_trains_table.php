<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('agency', 50);
            $table->string('start_station', 50);
            $table->string('end_station', 50);
            $table->dateTime('landing_hour');
            $table->dateTime('arrival_hour');
            $table->string('train_code', 20);
            $table->tinyInteger('n_cabs');
            $table->boolean('in_time');
            $table->boolean('deleted');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('agency');
            $table->dropColumn('start_station');
            $table->dropColumn('end_station');
            $table->dropColumn('landing_hour');
            $table->dropColumn('arrival_hour');
            $table->dropColumn('train_code');
            $table->dropColumn('n_cabs');
            $table->dropColumn('in_time');
            $table->dropColumn('deleted');
        });
    }
};
