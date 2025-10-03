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
        Schema::create('chuyen_bays', function (Blueprint $table) {
            $table->id();
            $table->string('ma_chuyen_bay')->unique();
            $table->string('diem_di');
            $table->string('diem_den');
            $table->string('gio_khoi_hanh');
            $table->string('gio_den');
            $table->string('gia_ve');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chuyen_bays');
    }
};
