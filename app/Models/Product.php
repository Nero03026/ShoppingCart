<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Product extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'product_name', 'product_category', 'product_weight',
        'product_units', 'product_image', 'product_descriptions',
        'product_stock', 'product_code', 'product_sku', 'product_status',
        'price_regular', 'price_sale', 'meta_title', 'meta_description',
        'user_id'
    ];

    public function follow_user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
