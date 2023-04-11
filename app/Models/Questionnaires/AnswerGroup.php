<?php
declare(strict_types=1);

namespace App\Models\Questionnaires;

use App\Models\Person;
use Illuminate\Database\Eloquent\Concerns\HasUniqueIds;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id;
 * @property Person $person;
 * @property string $comment;
 * @property QuestionAnswer[] $answers;
 */
class AnswerGroup extends Model
{
    use HasFactory, HasUniqueIds;
    protected $fillable = [
        'comment'
    ];
    protected $table = 'questionnaire_answer_groups';
    public $timestamps = true;

    function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
    function answers(): HasMany
    {
        return $this->hasMany(QuestionAnswer::class);
    }
}
