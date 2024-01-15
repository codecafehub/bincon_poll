<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LGA extends Model
{
    use HasFactory;

    protected $primaryKey = 'uniqueid';

    // app/Models/LocalGovernment.php

 
    public function pollingUnits()
    {
        return $this->hasMany(PollingUnit::class, 'lga_id');
    }
    


}
