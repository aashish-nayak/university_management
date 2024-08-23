<div class="row g-3">
    @csrf
    <div class="col-12">
        <label for="name" class="form-label">Student Name</label>
        <input type="text" id="name" class="form-control" required name="name" value="{{ old('name') ?? $student->name ?? '' }}">
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12">
        <label for="teacher" class="form-label">Teacher</label>
        <select id="teacher" class="form-control" required name="teacher_id">
            @foreach ($teachers as $key => $teacher)
            <option value="{{ $key }}" @selected(old('teacher_id') == $key || (isset($student) && $student->teacher_id == $key))>{{ $teacher }}</option>
            @endforeach
        </select>
        @error('teacher_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12">
        <label for="class" class="form-label">Class</label>
        <select id="class" class="form-control" required name="class">
            @foreach (range(1, 12) as $key => $val)
            <option value="{{ $val }}" @selected(old('class') == $val || (isset($student) && $student->class == $val))>{{ $val }}</option>
            @endforeach
        </select>
        @error('class')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12">
        <label for="admission" class="form-label">Admission Date</label>
        <input type="date" id="admission" class="form-control" required name="admission_date" value="{{ old('admission_date') ?? $student->admission_date ?? '' }}">
        @error('admission_date')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12">
        <label for="fees" class="form-label">Yearly Fees</label>
        <input type="number" id="fees" class="form-control" required name="yearly_fees" value="{{ old('yearly_fees') ?? $student->yearly_fees ?? '' }}">
        @error('yearly_fees')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</div>