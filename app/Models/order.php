<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['Ref_ID', 'BI_No', 'Cntr_No', 'Cargo_Name', 'Cnee_Name',
                            'Cnee_Phone', 'Port_Of_Loading', 'Loading_date', 'ATA_VIA_port',
                            'ATD_VIA_port', 'Vehicle_No', 'ATA_ZU', 'ATD_ZU', 'ZU_Vehicle_No',
                            'ATA_FD', 'Rel_Inc', 'Date_Release', 'Inst_Give_Date', 'Shipper',
                            'Agent', 'Payment', 'China_Agent', 'ReturnID'];
}
