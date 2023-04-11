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
        Schema::create('questionnaire_questions_answers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('question_id')->constrained('questionnaire_questions');
            $table->foreignId('answer_id')->constrained('questionnaire_answers');
            $table->foreignId('answer_group_id')->constrained('questionnaire_answer_groups');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionnaire_questions_answers');
    }
};
