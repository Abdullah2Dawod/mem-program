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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('name');
            $table->text('details');
            $table->string('duration');
            $table->float('price');
            $table->enum('level', ['4', '5', '6', '7', '8', '9', '10', '11', '12']);
            $table->enum('status', ['open', 'closed', 'ended', 'hidden']);
            $table->integer('number_subscribers')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
