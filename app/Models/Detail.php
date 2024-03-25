<?php

namespace App\Models;

use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'package_id',
        'month',
        'year',
        'start_date',
        'end_date',
        'payment_status'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
