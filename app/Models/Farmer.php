<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    use HasFactory;
    protected $table = "farmers";

    protected $fillable = ['firstname','lastname','phone','email','region','address','group_id'];
    public function user()
    {
        return $this->belongsTo('App\Models\user');
    }
    public function group()
    {
        return $this->belongsTo('App\Models\Group');
    }
    public function land()
    {
        return $this->hasMany('App\Models\FarmLand');
    }
}
