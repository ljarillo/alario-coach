<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'patient_id',
        'start',
        'end',
    ];

    public function patient(): HasOne
    {
        return $this->hasOne(Patient::class);
    }

    public function priorities(): HasMany
    {
        return $this->hasMany(Priority::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }

}
