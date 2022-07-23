<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['RefID', 'BINo', 'CntrNo', 'CargoName', 'CneeName',
                            'CneePhone', 'PortOfLoading', 'LoadingDate', 'ATA_VIA_port',
                            'ATD_VIA_port', 'VehicleNo', 'ATA_ZU', 'ATD_ZU', 'ZUVehicleNo',
                            'ATA_FD', 'RelIns', 'DateRelease', 'InstGiveDate', 'Shipper',
                            'Agent', 'Payment', 'ChinaAgent', 'ReturnID', 'FreeDays', 'RefType'];
}
