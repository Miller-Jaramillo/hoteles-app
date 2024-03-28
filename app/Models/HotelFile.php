<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelFile extends Model
{
    use HasFactory;

    protected $table = 'hotel_files';

    protected $fillable = [
        'hotels_id',
        'file_path',
        'file_type',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
