<?php
declare(strict_types=1);

namespace App\Models\Questionnaires;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id;
 * @property AnswerGroup $answerGroup;
 * @property Question $question;
 * @property Answer $answer;
 */
class QuestionAnswer extends Model
{
    use HasFactory;
    protected $fillable = [
    ];
    function answerGroup(): BelongsTo
    {
        return $this->belongsTo(AnswerGroup::class);
    }

    function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    function answer(): BelongsTo
    {
        return $this->belongsTo(Answer::class);
    }
    public $timestamps = true;
    protected $table = 'questionnaire_questions_answers';
}
