<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CropTypeVariety extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'crop_type_id'];

    protected $searchableFields = ['*'];

    protected $table = 'crop_type_varieties';

    public $timestamps = false;

    public function cropType()
    {
        return $this->belongsTo(CropType::class);
    }
}
