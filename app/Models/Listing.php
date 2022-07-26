<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['availability', 'location', 'square_meters', 'price' ];
    public function listingTypes()
    {
        return $this->belongsToMany(ListingType::class);
    }
    public function showTypes(){
        $names = array();
        $types = $this->listingTypes()->get();
        // dd($types);
        foreach($types as $type ){
            // dd($type);
            $names[] = $type->name;
        }
        return implode(',',$names);
    }
}
