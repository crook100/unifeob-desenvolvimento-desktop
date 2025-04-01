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
class ProductOne extends ProductBase
{
    public function getName(): string
    {
        return "Produto 1: " . $this->name;
    }
}