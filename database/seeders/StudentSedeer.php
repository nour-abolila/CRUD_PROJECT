<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student; // هنا بستدعى اسم المودل بتاعى اهة عشان مستخدمة تحت
use App\Models\User;

class StudentSedeer extends Seeder
{
    
    public function run(): void
    {
         // هنا بضيف عناصر فالجدول اهة عشان اقدر ارجعها لو الجدول اتمسح
        Student::create([
            'name' => 'nour abo lila',
            'email' => 'nourabolila@gmail.com',
            'age' => 21,
            'address' => 'mansoura',
        ]);

    }
}
 
// هروح بقا للصفحة بتاعة database seeder
// وهضيف السطر ده عشان اشغل السيدر بتاعى
// $this->call(StudentSedeer::class);