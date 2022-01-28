<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property  float $price
 * @property string $description
 * @property int $quantity
 * @property string created_at
 * @property string updated_at
 * @property ProductImageEntity[] $images
 */
class ProductEntity extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'title',
        'price',
        'description',
        'quantity',
    ];

    public function images()
    {
        return $this->hasMany(ProductImageEntity::class, 'product_id', 'id');
    }


}
