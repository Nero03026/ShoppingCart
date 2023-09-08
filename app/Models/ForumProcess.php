<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Forum;


class ForumProcess extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'forum_process';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id', 'target', 'forum_id'];

    /**
     * Get the phone associated with the user.
     */

    public function children()
    {
        return $this->hasMany(ForumProcess::class, 'target');
    }
    public function content()
    {
        // return $this->hasMany(Forum::class, 'forum_id');
        return $this->hasOne(Forum::class, 'id', 'forum_id');
    }
}
