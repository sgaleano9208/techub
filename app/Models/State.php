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

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function clientAddresses()
    {
        return $this->hasMany(ClientAddress::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
