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
        Schema::create('competitor', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("age");
            $table->integer("height");
            $table->integer("weight");
            $table->string("sex");
            $table->integer("cpf");
            $table->integer("rg");
            $table->string("team");
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
