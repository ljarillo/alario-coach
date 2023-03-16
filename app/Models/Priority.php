<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Priority extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'plan_id',
        'date',
        'time',
        'description',
        'observation',
    ];

    public function plan(): HasOne
    {
        return $this->hasOne(Plan::class);
    }
}
