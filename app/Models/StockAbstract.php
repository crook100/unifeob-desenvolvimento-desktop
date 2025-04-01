<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

abstract class StockAbstract extends Model
{
    public abstract function historic(): HasMany;
    public abstract function getQuantity(): int;
    public abstract function setQuantity(int $quantity): bool;
}