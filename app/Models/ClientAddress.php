<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClientAddress extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'address',
        'type',
        'status',
        'observation',
        'country_id',
        'state_id',
        'city_id',
        'client_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'client_addresses';

    public $timestamps = false;

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
