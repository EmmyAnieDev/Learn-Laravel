<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    
    // Naming convention: Prefix the function name with "scope" to define a query scope
    function scopeActive($query)
    {
        return $query->where('status', 1);
    }

}
