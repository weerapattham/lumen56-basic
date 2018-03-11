<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CityModel extends Model
{
    protected $table = 'city';
    protected $primaryKey = 'ID';
    protected $fillable = 'city';
    public $timestamps = false;
}