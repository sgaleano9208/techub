<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClientContact extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['client_id', 'name', 'email', 'phone', 'role'];

    protected $searchableFields = ['*'];

    protected $table = 'client_contacts';

    public $timestamps = false;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
