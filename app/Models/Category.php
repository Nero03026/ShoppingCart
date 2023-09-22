<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ParentCategory;

class Category extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categorys';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'img_path', 'name', 'slug',
        'parent', 'date', 'descriptions', 'status',
        'meta_title', 'meta_description',
    ];

    public function parent()
    {
        return $this->hasOne(ParentCategory::class, 'id', 'parent');
    }
}
