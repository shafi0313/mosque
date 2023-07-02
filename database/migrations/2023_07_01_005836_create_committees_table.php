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
        Schema::create('committees', function (Blueprint $table) {
            $table->id();
            $table->string('name',191);
            $table->string('designation',191);
            $table->string('phone',191);
            $table->string('email',191);
            $table->string('type',50);
            $table->date('joining_date');
            $table->boolean('status')->default(0);
            $table->boolean('is_present')->default(1);
            $table->string('address',255);
            $table->text('text')->nullable();
            $table->string('image',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('committees');
    }
};
