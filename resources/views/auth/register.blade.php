<style>
   
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

label {
    font-size: 14px;
    color: #333;
    margin-bottom: 6px;
    display: block;
}

input[type="text"], input[type="email"], input[type="password"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 14px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 16px;
}


div.error {
    color: red;
    font-size: 12px;
    margin-top: 4px;
}

/* Button styles */
button {
    width: 100%;
    padding: 12px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}


input:focus {
    outline: none;
    border-color: #4CAF50;
}

div {
    margin-bottom: 16px;
}

/* Margin for the submit button */
button {
    margin-top: 12px;
}

</style>

<form method="POST" action="{{ route('register') }}">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>
    <div>
        <button type="submit">Register</button>
    </div>
</form>
