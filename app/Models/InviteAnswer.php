<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id;
 * @property int $number_of_persons;
 * @property string $message;
 * @property boolean $is_accepted;
 * @property Person $person;
 * @property string $satellites_message;
 */
class InviteAnswer extends Model implements ShouldQueue
{
    use HasFactory;
    protected $fillable = [
        'is_accepted',
        'number_of_persons',
        'message',
        'satellites_message'
    ];

    function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
    public $timestamps = true;
}
