<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingType extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name'];


    public function listings()
    {
        return $this->belongsToMany(Listing::class);
    }

}
