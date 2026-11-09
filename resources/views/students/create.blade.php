<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            box-sizing: border-box;
        }

        button {
            background: #198754;
            color: white;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
        }

        .error {
            color: red;
            font-size: 14px;
        }

        a {
            color: #0d6efd;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Add New Student</h2>

    <a href="{{ route('students.index') }}">← Back to Students</a>

    <form action="{{ route('students.store') }}" method="POST">

        @csrf

        <label>Student Number</label>
        <input type="text" name="student_number"
               value="{{ old('student_number') }}"
               placeholder="e.g. 2026-001">
        @error('student_number')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Full Name</label>
        <input type="text" name="name"
               value="{{ old('name') }}"
               placeholder="Enter full name">
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Email</label>
        <input type="email" name="email"
               value="{{ old('email') }}"
               placeholder="Enter email">
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Course</label>
        <input type="text" name="course"
               value="{{ old('course') }}"
               placeholder="e.g. BSIT">
        @error('course')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Year Level</label>
        <select name="year_level">
            <option value="">Select Year Level</option>
            @foreach([1, 2, 3, 4] as $year)
                <option value="{{ $year }}"
                    {{ old('year_level') == $year ? 'selected' : '' }}>
                    Year {{ $year }}
                </option>
            @endforeach
        </select>
        @error('year_level')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Save Student</button>

    </form>

</div>

</body>
</html>