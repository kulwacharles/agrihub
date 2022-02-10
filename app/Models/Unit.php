<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'units';

    protected $fillable = ['user_id','name'];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo('App\Models\user');
    }
}
