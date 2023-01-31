<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'photo',
        'features',
        'packing_type',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'features' => 'array',
    ];

    public function treatmentPasses()
    {
        return $this->belongsToMany(TreatmentPass::class);
    }
}
