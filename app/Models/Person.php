<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table = 'people';
    protected $fillable = ['person_name','date_of_birth' , 'age','gender','profile_image','filename','path'];
// 体温一覧リスト↓
    public function temperatures()
    {
        return $this->hasMany(Temperature::class,'people_id');
    }

}