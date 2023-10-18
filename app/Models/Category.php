<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'type',
    ];
    // protected $hidden = [
    //     'created_at',
    //     'updated_at',
    // ];
  // protected $timestamp=true; 
  public function goods()
    {
        return $this->hasMany(good::class);
    }
}
