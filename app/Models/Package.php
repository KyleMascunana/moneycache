<?php

namespace App\Models;

use App\Models\Detail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_number',
        'package_name',
        'package_detail',
        'package_price',
        'package_status',
        'package_trial',
        'file'
    ];

    public function details()
    {
        return $this->hasMany(Detail::class);
    }
}
