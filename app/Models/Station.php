<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaraunt;

class Station extends Model
{
    use HasFactory;

    protected $table = 'stations';


    protected $fillable = ['name', 'image_link', 'description'];



    public function scopeFilter($query, array $filters)
{
    $query->when(isset($filters['restsearch']), function ($query) use ($filters) {
        $restsearch = $filters['restsearch'];
        $query->where('name', 'like', "%$restsearch%");
    });
}


    public function restaraunts()
    {
        return $this->hasMany(Restaraunt::class);
    }

    


}
