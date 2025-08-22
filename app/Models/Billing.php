<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Billing extends Model
{
    use HasFactory;
    protected $parPage = 10;

    protected $fillable = [
        'issue_date',
        'expiration_date',
        'total_amount',
        'payment_status',
        'payment_method',
        'invoice_number',
        'case_customer_id'
    ];

     public function case_customer ()
    {
        return $this->belongsTo (Case_customer::class);
    }






}
