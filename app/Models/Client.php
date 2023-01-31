<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'logo',
        'name',
        'email',
        'phone',
        'vat',
        'origin',
        'status',
        'type',
        'technician_id',
    ];

    protected $searchableFields = ['*'];

    public function technician()
    {
        return $this->belongsTo(User::class, 'technician_id');
    }

    public function clientAddresses()
    {
        return $this->hasMany(ClientAddress::class);
    }

    public function clientContacts()
    {
        return $this->hasMany(ClientContact::class);
    }

    public function crops()
    {
        return $this->hasMany(Crop::class);
    }

    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }

    public function treatmentReports()
    {
        return $this->hasMany(TreatmentReport::class);
    }
}
