<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Number extends Model
{
    use HasFactory;

    public function massages(): HasMany
    {
        return $this->hasMany(Massage::class);
    }
    
    protected $fillable = [
        'id_order',
        'number',   
    ];
}
