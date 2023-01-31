<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Treatment extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'client_id',
        'crop_id',
        'name',
        'start_date',
        'end_date',
        'type',
        'status',
        'note',
        'attachment',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function treatmentPass()
    {
        return $this->hasMany(TreatmentPass::class, 'treatment_id');
    }

    public function treatmentReports()
    {
        return $this->hasMany(TreatmentReport::class);
    }
}
