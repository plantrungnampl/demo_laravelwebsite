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
        if(Schema::hasTable('role')) return; 
        Schema::table('users', function (Blueprint $table) {
        $table->string('phone_number', 20);
        $table->string('address', 200);
        $table->tinyInteger('deleted')->default(0);
        $table->unsignedBigInteger('role_id');
        $table->foreign('role_id')->references('id')->on('role');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};