<?php
declare(strict_types=1);

namespace App\Models\Questionnaires;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id;
 * @property string $name;
 * @property Question[] $questions;
 * @property Person $person;
 */
class Answer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    protected $table = 'questionnaire_answers';
    public $timestamps = false;

    function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
