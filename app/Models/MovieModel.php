<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieModel extends Model
{
    use HasFactory;
    protected $table = 'movie';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = [
        'kode',
        'judul',
        'genre',
        'sutradara',
        'durasi',
        'tanggal_rilis',
        'rating',
        'jam_tayang'
    ];

    public function scopeFilter($query, array $filters){

        $query->when($filters['q'] ?? false, function ($query, $search){
            return $query->where(function($query) use ($search){
                $query->where('judul', 'like', '%' . $search. '%');
            });
        });
    }
}
