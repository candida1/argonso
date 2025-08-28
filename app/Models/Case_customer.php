<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Case_customer extends Model
{
 use HasFactory;
    protected $parPage = 10;

    protected $fillable = [
        'file_number',
        'type_case',
        'opening_date',
        'status_case',
        'description',
        'priority',
        'customer_id',
        'lawyer_id'
    ];


    public function customer ()
    {
        return $this->belongsTo (Customer::class);
    }

    public function lawyer ()
    {
        return $this->belongsTo (Lawyer::class);
    }

    public function billing ()
    {
        return $this->hasOne (Billing::class);
    }

    public function change_history ()
    {
        return $this->belongsTo (Change_history::class);
    }




}
