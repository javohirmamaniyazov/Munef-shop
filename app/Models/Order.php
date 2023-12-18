<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'product_id',
        'fullname',
        'phone',
        'status'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function getRecord()
    {
        return self::select('orders.*', 'products.name as product_name')
            ->join('products', 'products.id', '=', 'orders.product_id');
    }
}
