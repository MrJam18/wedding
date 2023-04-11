<?php
declare(strict_types=1);

namespace App\Models;

use App\Models\Questionnaires\AnswerGroup;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id;
 * @property string $name;
 * @property string $surname;
 * @property string $patronymic;
 * @property string $phone;
 * @property ?string $email;
 * @property AnswerGroup $answerGroup;
 * @property InviteAnswer $inviteAnswer;
 */
class Person extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'patronymic',
        'phone',
        'email'
    ];
    public $timestamps = true;
    protected $table = 'persons';

    function answerGroup(): HasOne
    {
        return $this->hasOne(AnswerGroup::class);
    }
    function inviteAnswer(): HasOne
    {
        return $this->hasOne(InviteAnswer::class);
    }
}
