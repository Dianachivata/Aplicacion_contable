<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey_result extends Model
{
    use HasFactory;
    public function survey(){
        return $this->belongsTo(survey::class,'SurveyId','id');
    }

}
