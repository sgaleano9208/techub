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
        'town_id',
        'client_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'client_addresses';

    public $timestamps = false;

    protected $casts = [
        'status' => 'boolean',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function town()
    {
        return $this->belongsTo(Town::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
