<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ItemCategories;
use App\Models\Unit;
use App\Models\User;

class ItemDetails extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'description', 'article', 'unit_id', 'unit_name', 'added_by', 'price_catalogue', 'is_approved', 'approved_by'];

    public function category()
    {
        return $this->belongsTo(ItemCategories::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
