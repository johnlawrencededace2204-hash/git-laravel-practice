<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>

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
            background: #1372ff;
            color: white;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Edit Student</h1>

    <a href="{{ route('students.index') }}"> ← Back to Students</a>
    <br>
    <br>

    <form action="{{ route('students.update', $student->id) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Student Number</label>
        <input type="text" name="student_number"
               value="{{ old('student_number', $student->student_number) }}">
        @error('student_number')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Full Name</label>
        <input type="text" name="name"
               value="{{ old('name', $student->name) }}">
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Email</label>
        <input type="email" name="email"
               value="{{ old('email', $student->email) }}">
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Course</label>
        <input type="text" name="course"
               value="{{ old('course', $student->course) }}">
        @error('course')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Year Level</label>
        <select name="year_level">
            @foreach([1, 2, 3, 4] as $year)
                <option value="{{ $year }}"
                    {{ old('year_level', $student->year_level) == $year ? 'selected' : '' }}>
                    Year {{ $year }}
                </option>
            @endforeach
        </select>
        @error('year_level')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Update</button>

    </form>

</div>

</body>
</html>