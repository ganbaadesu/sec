<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnID extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['Return_Date', 'Vehicle_No', 'Destination', 'ATA_ZU', 'ATD_ZU', 'Transfer_No', 'Free_Days'];
}
