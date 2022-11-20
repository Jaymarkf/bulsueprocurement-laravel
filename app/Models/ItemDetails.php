<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ItemCategories;

class ItemDetails extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','category_name', 'description', 'article', 'unit_id', 'unit_name', 'price_catalogue'];

    public function category()
    {
        return $this->belongsTo(ItemCategories::class);
    }
}

