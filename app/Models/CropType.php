<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CropType extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name'];

    protected $searchableFields = ['*'];

    protected $table = 'crop_types';

    public $timestamps = false;

    public function crops()
    {
        return $this->hasMany(Crop::class);
    }

    public function cropTypeVarieties()
    {
        return $this->hasMany(CropTypeVariety::class);
    }
}
