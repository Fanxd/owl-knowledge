<?php
namespace Fanxd\OwlKnowledge\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Slowlyo\OwlAdmin\Models\BaseModel as Model;
class KnowledgeCategory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'code',
        'status',
        'priority',
    ];
}
