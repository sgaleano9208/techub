<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Town extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['state_id', 'name', 'cp'];

    protected $searchableFields = ['*'];

    public $timestamps = false;

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function clientAddresses()
    {
        return $this->hasMany(ClientAddress::class);
    }
}
