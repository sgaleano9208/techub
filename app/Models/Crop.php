<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Crop extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'client_id',
        'crop_type_id',
        'area',
        'tecnical_information',
        'problems',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'tecnical_information' => 'array',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function cropType()
    {
        return $this->belongsTo(CropType::class);
    }

    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }
}
