<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;// بكتب دة عشان استدعى الكلاس دة
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{    

    // دول لازم بكتبهم عشان دة بيسمحلى احدد الاعمدة اللى عايزها فالجدول للامان يعنى
    use HasFactory; 
    protected $fillable = ['name', 'email', 'age', 'address'];
}
