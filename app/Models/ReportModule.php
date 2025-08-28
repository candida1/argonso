<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReportModule extends Model
{
    use HasFactory;
    protected $parPage = 10;
    protected $table = "reportmodules";

    protected $fillable = [
        'customer_name',
        'assigned_attomey',
        'status_case',
        'date_writting',
        'type_report',

    ];

    public function activity ()
    {
        return $this->hasOne (Activity::class);
    }








}
