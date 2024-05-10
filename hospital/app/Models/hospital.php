<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class hospital extends Model
{
    use HasFactory;
    use softDeletes;

    protected $guarded=[];

    // public function getRoutekeyName()
    // {
    //     return 'slug';
    // }

    public function getVisits()
    {
        return $this->hasMany(visit::class,'Patient_id','id');
    }
}
