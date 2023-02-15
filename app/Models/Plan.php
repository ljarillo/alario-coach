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
        'priority',
        'question1',
        'question2',
        'question3',
        'question4',
        'question5',
    ];

    public function patient(): HasOne
    {
        return $this->hasOne(Patient::class);
    }
}
