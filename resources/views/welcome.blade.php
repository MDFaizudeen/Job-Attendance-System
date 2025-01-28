<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex flex-col items-center justify-center min-h-screen">
        <h1 class="text-4xl font-bold mb-6">Eloquent</h1>

        <div class="space-x-4">
            <!-- Update these links with your Laravel routes -->
            <a href="{{ route('one-to-one') }}" class="bg-blue-500 text-white px-6 py-2 rounded-lg shadow-md hover:bg-blue-600">One to One</a>
            <a href="{{ route('one-to-many') }}" class="bg-green-500 text-white px-6 py-2 rounded-lg shadow-md hover:bg-green-600">One to Many</a>
            <a href="{{ route('many-to-many') }}" class="bg-red-500 text-white px-6 py-2 rounded-lg shadow-md hover:bg-red-600">Many to Many</a>
        </div>
    </div>
</body>
</html>
