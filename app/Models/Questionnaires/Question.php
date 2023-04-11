<?php
declare(strict_types=1);

namespace App\Models\Questionnaires;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id;
 * @property string $name;
 */
class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    protected $table = 'questionnaire_questions';
    public $timestamps = false;
}
