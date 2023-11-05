<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table="products";

    public static function search($keyword, $sorting)
    {
        $query = Product::where('name', 'like', "%$keyword%");
    
        if ($sorting === 'desc') {
            $query->orderBy('created_at', 'desc');
        } elseif ($sorting === 'az') {
            $query->orderBy('name', 'asc');
        } elseif ($sorting === 'za') {
            $query->orderBy('name', 'desc');
        }elseif($sorting === 'low')
        {
            $query->orderBy('price', 'asc');
        } elseif($sorting === 'high')
        {
            $query->orderBy('price', 'desc');
        }
        else {
            $query->orderBy('created_at', 'asc');
        }
    
        return $query;
    }
    
}
