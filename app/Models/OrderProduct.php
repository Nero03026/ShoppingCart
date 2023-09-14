<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderDeatail;

class OrderProduct extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'order_id', 'product_id', 'product_qty',
        'product_name', 'product_category', 'product_image',
        'product_sale'
    ];

    public function deatail()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
