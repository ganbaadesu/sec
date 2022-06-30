<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='containers';
    protected $fillable = ['CntrNo', 'CntrSize', 'CntrType', 'CntrOwner'];
}
