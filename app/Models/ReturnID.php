<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnID extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table ='ReturnID';
    protected $fillable = ['ReturnDate', 'ReturnVehicleNo', 'Destination', 'ATA_ZU', 'ATD_ZU', 'TransferNo', 'Alarm'];
}
