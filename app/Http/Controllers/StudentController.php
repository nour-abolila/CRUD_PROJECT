<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; // دة المسؤؤل عن استقبال البيانات المبعوتة من اى فورم 
use App\Models\Student; // هنا لازم استدعى اسم المودل بتاعى عشان هستخدمة تحت
use Illuminate\Support\Facades\DB; // هنا انا بنادى على الكلاس دة عشان يسمحلى اتعامل مع الداتا بيز تحت

class StudentController extends Controller
{    
     // هنا انا بتبع تسمية موقع لارافيل Resource Controllers
    public function index()
    {
      $student = Student::all();   // هنا بقولة هات كل البيانات من الجدول باول طريقة
  //  $student = DB::table('students')->get();  دى الطريقة التانية
      return view('student_welcome' , ['data' => $student]);  // هنا بيعرضلى الصفحة معاها البيانات متخزنة فى متغير اسمة داتا
    }

    //  هنا بيعرضلى صفحة الفيو على حسب ال id
    public function show($id=null)
    {
    // $student = student::where('id' , $id)->first();  اول طريقة
       $student = Student::find($id); // الطريقة التانية
       return view('student_view' , ['data' => $student]); 
    }

    public function create(){  // هنا بقولة اظهرلى الصفحة دى بتاعة اضافة طالب

       return view ('student_create');
    }


    public function store(Request $request){  // هنا انا بستدعى البيانات اللى هتتكتب فى الفورم عن طريق الكلاس ريكويست

       $request->validate([  // هنا بتاكد من صحة البيانات فى الفورم
         'name' => 'required',
         'email' => 'required|email',
         'age' => 'required|integer',
         'address' => 'required',
       ]);

       $student = new student(); // هنا بعمل طالب جديد
       $student->name = $request->name; // هنا بقولة فى جزء الاسم اللى فالجدول بتاعى سجلى الاسم اللى مبعوت من فورم الاسم عن طريق الريكويست
       $student->email = $request->email;
       $student->age = $request->age;
       $student->address = $request->address;
       $student->save();

       return redirect()->route('student.index');  // هنا بعد ما تعمل submit يرحعنى للصفحة الاساسية تانى
    }

    public function edit($id){
      
      $student = Student::find($id);   
      return view ('student_edit' , ['student' => $student]);  
    }


    public function update(Request $request , $id){

       $student = Student::find($id);  
       $student->name = $request->name;
       $student->email = $request->email;
       $student->age = $request->age;
       $student->address = $request->address;
       $student->save();

       return redirect()->route('student.index');
    }

    public function destroy($id){

         $delete = student::find($id); // هنا بقولة دور على الطالب اللى هحددة وامسحة
         $delete -> delete();
         return redirect()->route('student.index');
    }
}
