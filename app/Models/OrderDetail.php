<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class OrderDetail extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $appends=['student_id_url'];

    public function getStudentIdUrlAttribute(){
        return $this->student_id_image ? Storage::url($this->student_id_image) : null;
    }


}
