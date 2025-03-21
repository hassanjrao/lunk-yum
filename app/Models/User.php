<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'school_id',
        'student_name',
        'student_grade',
        'student_id_image',
        'starts_from',
        'ends_at',
        'payment_method',
        'payment_receipt',
        'plan_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function plan()
    {
        return $this->belongsTo(Plan::class)->withDefault();
    }


    protected $appends=['student_id_url','payment_receipt_url'];

    public function getStudentIdUrlAttribute(){
        return $this->student_id_image ? Storage::url($this->student_id_image) : null;
    }

    public function getPaymentReceiptUrlAttribute(){
        return $this->payment_receipt ? Storage::url($this->payment_receipt) : null;
    }

}
