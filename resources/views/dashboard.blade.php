<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body { font-family: Arial; background: #f0f2f5; display: flex;
               justify-content: center; align-items: center; height: 100vh; }
        .card { background: white; padding: 40px; border-radius: 10px;
                text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        button { padding: 10px 24px; background: #e53e3e; color: white;
                 border: none; border-radius: 6px; cursor: pointer; }
    </style>
</head>
<body>
<div class="card">
    <h2>Welcome, {{ Auth::user()->name }} !</h2>
    <p>You are logged in.</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</div>
</body>
</html>