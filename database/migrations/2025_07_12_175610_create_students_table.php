<?php

use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint;  
use Illuminate\Support\Facades\Schema; 
use Illuminate\Support\Facades\DB; // هذا الملف مسؤول عن إنشاء جدول الطلاب في قاعدة البيانات ولازم استدعية

return new class extends Migration
{

    public function up(): void
    {
        //  هنا بنعمل جدول الطلاب اللى هيتسجل فالداتا بيز عندى
        // ونعرف فيه الحقول اللى عاوزينها 
        // ونعرف نوع كل حقل وصفاتة اللى عايزينها
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('age')->unsigned();// لازم العمر يبقى موجب مش سالب
            $table->string('address');
            $table->timestamps();
        });
        
    }       // **** روح بق على صفحة المودل عشان تعمل سماح بالجداول دى



    // دى لو عاوز امسح الجدول بقا 
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
