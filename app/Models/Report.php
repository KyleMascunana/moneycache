<?php

namespace App\Models;

use App\Models\Detail;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'detail_id'
    ];

    public function detail()
    {
        return $this->belongsTo(Detail::class);
    }
}
