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
        Schema::create("locality", function (Blueprint $table) {
            $table->id();
            $table->string("road");
            $table->string("neighborhood");
            $table->integer("number");
            $table->integer("cep");
            $table->string("city");
            $table->string("state");
            $table->string("country");
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
