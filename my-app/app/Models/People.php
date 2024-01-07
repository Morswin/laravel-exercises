<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'surename', 'phoneNumber', 'street', 'city', 'country'];
}
