<?php

namespace App\Models;

use App\Models\Detail;
use App\Models\Package;
use App\Events\CustomerCreated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'name',
        'email',
        'contact',
        'bussiness_name',
        'business_location',
        'user_status',
        'package_id'
    ];

    public function details()
    {
        return $this->hasMany(Detail::class);
    }


    protected $dispatchesEvents = [
        'created' => CustomerCreated::class,
    ];
}
