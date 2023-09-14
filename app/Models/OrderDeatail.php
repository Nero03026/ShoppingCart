<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderProduct;

class OrderDeatail extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_deatails';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'user_id', 'order_name', 'first_name', 'last_name',
        'order_delivery', 'address_first', 'address_last', 'address_code',
        'address_name', 'order_remark', 'order_static', 'order_total',
        'pay_mothod', 'pay_static',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function product()
    {
        return $this->belongsTo(OrderProduct::class, 'id', 'order_id');
    }
}
