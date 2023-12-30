<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PencapaianPelatih extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['pelatih'];

    public function pelatih()
    {
        return $this->belongsTo(Pelatih::class, 'pelatih_id');
    }
}
