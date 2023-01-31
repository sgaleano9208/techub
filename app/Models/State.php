<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['country_id', 'name'];

    protected $searchableFields = ['*'];

    public $timestamps = false;

    public function towns()
    {
        return $this->hasMany(Town::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function clientAddresses()
    {
        return $this->hasMany(ClientAddress::class);
    }
}
