<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemDetails extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'description', 'article', 'unit', 'price_catalogue'];
}
