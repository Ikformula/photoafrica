<?php

namespace App\Models\PhotoAfrica;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contestant extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'paid_at',
        'amount_paid'
    ];

}
