<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded=[];

    protected $appends=['student_id_url','payment_receipt_url','order_id'];


    public function plan()
    {
        return $this->belongsTo(Plan::class)->withDefault();
    }

    public function school()
    {
        return $this->belongsTo(School::class)->withDefault();
    }

    public function getOrderIdAttribute(){
        $id= str_pad($this->id, 3, '0', STR_PAD_LEFT);
        return 'OR'.$id;
    }


    public function getPaymentReceiptUrlAttribute(){
        return $this->payment_receipt ? Storage::url($this->payment_receipt) : null;
    }

    public function user(){

        return $this->belongsTo(User::class)->withDefault();
    }

    public function orderDetails(){

        return $this->hasMany(OrderDetail::class);
    }

}
