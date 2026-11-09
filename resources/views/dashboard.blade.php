<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

    <h1>Welcome to Dashboard!</h1>

    <h3>Hello, {{ auth()->user()->name }}!</h3>

    <p>You successfully logged in.</p>

    <form action="/logout" method="POST">
        @csrf

        <button type="submit">Logout</button>
    </form>

</body>
</html>