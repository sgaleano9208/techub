<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TreatmentReport extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'client_id',
        'treatment_id',
        'name',
        'date',
        'content',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'treatment_reports';

    protected $casts = [
        'date' => 'date',
        'content' => 'array',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function treatment()
    {
        return $this->belongsTo(Treatment::class);
    }
}
