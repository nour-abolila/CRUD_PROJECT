<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
 
    public function run(): void
    {
        // هنا بضيف السطر ده عشان اشغل السيدر بتاعى لما اضغط على db:seed يشغلى السيدر اللى اسمة StudentSedeer
        // لو مش ضفت السطر ده مش هيشتغل السيدر بتاعى
       $this->call(StudentSedeer::class);
    
    }
}
