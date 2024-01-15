<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollingUnit extends Model
{
    use HasFactory;
    protected $primaryKey = 'uniqueid';

    public function announcedPuResults()
{
    return $this->hasMany(AnnouncedPuResult::class, 'polling_unit_uniqueid');
}

}
