<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
<h1 class="text-4xl font-bold mt-5 text-center">Eloquent Relationships</h1>

    <div class="flex flex-col items-center justify-center min-h-screen py-6">

        <div class="space-y-4 mb-5">
            <a href="{{ url('/attendance') }}" class="block bg-blue-500 text-white px-6 py-2 rounded-md text-center hover:bg-blue-600">
                One to One
            </a>
            <a href="{{ url('/attendance/create') }}" class="block bg-green-500 text-white px-6 py-2 rounded-md text-center hover:bg-green-600">
                One to Many
            </a>
            <a href="{{ url('/many') }}" class="block bg-red-500 text-white px-6 py-2 rounded-md text-center hover:bg-red-600">
                Many to Many
            </a>
            <a href="{{ url('/has_one_through') }}" class="block bg-yellow-500 text-white px-6 py-2 rounded-md text-center hover:bg-yellow-600">
                Has One Through
            </a>
            <a href="{{ url('/has_through_many') }}" class="block bg-purple-500 text-white px-6 py-2 rounded-md text-center hover:bg-purple-600">
                Has Through Many
            </a>
            <a href="{{ url('/polymorphic_one') }}" class="block bg-blue-500 text-white px-6 py-2 rounded-md text-center hover:bg-teal-600">
                Polymorphic One
            </a>
            <a href="{{ url('/polymorphic_many') }}" class="block bg-pink-500 text-white px-6 py-2 rounded-md text-center hover:bg-pink-600">
                Polymorphic Many
            </a>
        </div>
    </div>
</body>
</html>
