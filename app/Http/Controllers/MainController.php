<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard()
    {
        $teacherCount = Teacher::count();
        $studentCount = Student::count();
        return view('admin.dashboard', compact('teacherCount', 'studentCount'));
    }
}
