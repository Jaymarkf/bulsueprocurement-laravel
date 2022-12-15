<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ItemDetails;

class ItemCategories extends Model
{
    use HasFactory;
    protected $fillable = ['description'];


    public function detail()
    {
        return $this->hasMany(ItemDetails::class, 'id', 'category_id');
    }
}
