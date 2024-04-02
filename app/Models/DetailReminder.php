<?php

namespace App\Models;

use App\Models\Detail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailReminder extends Model
{
    use HasFactory;

    protected $fillable = [
        'detail_id',
        'due_date',
        'month'
    ];

    public function detail()
    {
        return $this->belongsTo(Detail::class);
    }
}
