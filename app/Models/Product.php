<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters){

        $query->when($filters['q'] ?? false, function ($query, $search){
            return $query->where(function($query) use ($search){
                $query->where('nama', 'like', '%' . $search. '%');
            });
        });
    }
}
