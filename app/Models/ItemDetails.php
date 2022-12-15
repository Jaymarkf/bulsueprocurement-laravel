<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ItemCategories;
use App\Models\Unit;

class ItemDetails extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'description', 'article', 'unit_id', 'unit_name', 'price_catalogue', 'is_approved', 'approved_by'];

    public function category()
    {
        return $this->belongsTo(ItemCategories::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
