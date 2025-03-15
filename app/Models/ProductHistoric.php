<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * This is the model class for table "products_historic".
 *
 * @property int $id Product historic ID
 * @property int $product_id Product ID
 * @property int $operation Operation type (add, subtract)
 * @property int $quantity Quantity changed
 */
class ProductHistoric extends Model
{
    protected $table = "products_historic";

    public const OPERATION_ADD = 1;
    public const OPERATION_SUB = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "product_id",
        "operation",
        "quantity",
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
