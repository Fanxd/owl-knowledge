<?php

namespace Fanxd\OwlKnowledge\Models;

use Slowlyo\OwlAdmin\Models\BaseModel as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Knowledge extends Model
{
    use SoftDeletes;

    protected $table = 'knowledge';

    protected $fillable = [
        'title',
        'category_code',
        'scene',
        'content',
        'priority',
        'status',
        'metadata',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'metadata' => 'array',
    ];
}
