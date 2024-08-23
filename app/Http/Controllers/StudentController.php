<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Yajra\DataTables\Facades\DataTables;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $model = Student::with('teacher:id,name');

            return DataTables::eloquent($model)
                ->editColumn('yearly_fees', function ($row) {
                    return number_format($row->yearly_fees);
                })
                ->editColumn('admission_date', function ($row) {
                    return Carbon::createFromDate($row->admission_date)->format('d M Y');
                })
                ->addColumn('action', function ($row) {
                    $html = '<a href="' . route('student.edit', $row->id) . '" class="btn btn-sm btn-secondary btn-edit">Edit</a> ';
                    $html .= '<button data-rowid="' . $row->id . '" class="btn btn-sm btn-danger btn-delete">Del</button>';
                    return $html;
                })
                ->toJson();
        }

        return view('admin.student.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::orderBy('name')->pluck('name', 'id');
        return view('admin.student.create', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        try {
            Student::create($request->except('_token'));

            session()->flash('success_message', 'Student added successfully!');
        } catch (\Exception $e) {
            session()->flash('error_message', $e->getMessage());
        }

        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $teachers = Teacher::orderBy('name')->pluck('name', 'id');
        return view('admin.student.edit', compact('teachers', 'student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, Student $student)
    {
        try {
            $student->update($request->except('_token'));
            session()->flash('success_message', 'Student updated successfully!');
        } catch (\Exception $e) {
            session()->flash('error_message', $e->getMessage());
        }

        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        try {
            $student->delete();
            session()->flash('success_message', 'Student deleted successfully!');
        } catch (\Exception $e) {
            session()->flash('error_message', $e->getMessage());
        }

        return redirect()->route('student.index');
    }
}
