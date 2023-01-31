<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TreatmentPass extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = ['treatment_id', 'name', 'date', 'status'];

    protected $searchableFields = ['*'];

    protected $table = 'treatment_passes';

    protected $casts = [
        'date' => 'date',
    ];

    public function treatment()
    {
        return $this->belongsTo(Treatment::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
