<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $model = Teacher::withCount('students');

            return DataTables::eloquent($model)->toJson();
        }

        return view('admin.teacher.list');
    }
}
