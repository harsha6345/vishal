<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Station;
use App\Models\Dish;

class Restaraunt extends Model
{
    use HasFactory;

    protected $table = 'restaraunts';

    protected $guarded = [];

    public function scopeFilter($query, array $filters)
    {
        $query->when(isset($filters['search']), function ($query) use ($filters) {
            $search = $filters['search'];
            $query->where('name', 'like', "%$search%");
        });
    }

    public function station()
    {
        return $this->belongsTo(Station::class);
    }
    

    public function dishes(): HasMany
    {
        return $this->hasMany(Dish::class,);
    }
}
