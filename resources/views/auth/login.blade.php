<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 1rem;
            color: #333;
        }

        div {
            margin-bottom: 1rem;
        }

        label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 0.5rem;
        }

        input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            color: #333;
        }

        input:focus {
            border-color: #007BFF;
            outline: none;
        }

        button {
            width: 100%;
            padding: 0.8rem;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: #d9534f;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h1>Login</h1>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>
