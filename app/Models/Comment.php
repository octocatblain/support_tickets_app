<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;


/**
 * Summary of Comment
 */
class Comment extends Model
{
    use HasFactory;

    /**
     * Summary of guarded
     * @var array
     */
    protected $guarded = [];

    // relationship of comment to user id field
    /**
     * Summary of creator
     * @return BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
