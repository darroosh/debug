<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Bug 4: Missing $fillable or $guarded property (for mass assignment vulnerability, though not directly a "bug" in this context, good to discuss)
    // protected $fillable = ['name', 'description', 'price'];  // Example fix
    protected $guarded = []; // Example fix
}
