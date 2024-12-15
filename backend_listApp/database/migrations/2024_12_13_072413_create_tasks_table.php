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
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user');
            $table->string('nama_tugas');
            $table->string('deskripsi');
            $table->dateTime('tgl_tugas');
            $table->enum('status', [
                'belum_selesai', 
                'sedang_dikerjakan', 
                'selesai'
            ])->default('belum_selesai');
            $table->enum('prioritas', [
                'low',
                'medium',
                'hight'
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
