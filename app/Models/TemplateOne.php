<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateOne extends Model
{
    use HasFactory;

    protected $fillable = [
        'template_name',
        'customer_name',
        'customer_job',
        'customer_business_name',
        'customer_address',
        'email_date',
        'customer_abbreviation',
        'email_description',
    ];
}
