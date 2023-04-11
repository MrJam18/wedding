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
        Schema::create('invite_answers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('person_id')->constrained('persons');
            $table->boolean('is_accepted');
            $table->integer('number_of_persons')->nullable();
            $table->text('message')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invite_answers');
    }
};
