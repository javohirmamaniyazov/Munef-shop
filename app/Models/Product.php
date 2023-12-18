<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = [
        'name',
        'rus_name',
        'description',
        'rus_description',
        'cost',
        'ingredients',
        'user_id'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public static function getProduct()
    {
        return self::select('products.*', 'users.name as user_name')
            ->join('users', 'users.id', '=', 'products.user_id');
    }

    public function productImages() {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
}
