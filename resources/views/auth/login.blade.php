<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial; background: #f0f2f5; display: flex;
               justify-content: center; align-items: center; height: 100vh; }
        .card { background: white; padding: 40px; border-radius: 10px;
                width: 380px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; margin-bottom: 20px; }
        input { width: 100%; padding: 10px; margin-top: 6px;
                margin-bottom: 14px; border: 1px solid #ddd;
                border-radius: 6px; font-size: 14px; }
        button { width: 100%; padding: 11px; background: #4f46e5;
                 color: white; border: none; border-radius: 6px;
                 font-size: 16px; cursor: pointer; }
        .error { color: red; font-size: 13px; margin-top: -10px;
                 margin-bottom: 10px; }
    </style>
</head>
<body>
<div class="card">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" placeholder="you@example.com">
        @error('email') <div class="error">{{ $message }}</div> @enderror

        <label>Password</label>
        <input type="password" name="password" placeholder="••••••••">
        @error('password') <div class="error">{{ $message }}</div> @enderror

        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>