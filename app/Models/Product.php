<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * This is the model class for table "products".
 *
 * @property int $id Product ID
 * @property string $name Product name
 * @property string $description Product description
 * @property int $quantity Quantity in stock
 */
class Product extends Model
{
    protected $table = "products";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "name",
        "description",
        "quantity",
    ];

    public function historic(): HasMany
    {
        return $this->hasMany(ProductHistoric::class);
    }
}