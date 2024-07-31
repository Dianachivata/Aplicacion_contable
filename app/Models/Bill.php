<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    public function purchase_order(){
        return $this->belongsTo(purchase_order::class,'ReceiptId','id');
    }
}
