<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Change_history extends Model
{
    use HasFactory;
    protected $parPage = 10;

    protected $fillable = [
        'date',
        'time',
        'assigned_attorner',
        'action_taken',
        'reason_change',
        'case_customer_id'

    ];

    public function case_customer ()
    {
        return $this->belongsTo (Case_customer::class);
    }






}
