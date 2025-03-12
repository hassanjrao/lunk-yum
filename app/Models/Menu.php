<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded=[];

    protected $table = 'menus';

    public function week()
    {
        return $this->belongsTo(Week::class);
    }

    public function day()
    {
        return $this->belongsTo(Day::class);
    }

}
