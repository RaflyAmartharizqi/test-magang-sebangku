<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Register</title>
</head>
<body>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register to your account</h2>
    </div>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    @if($errors->any())
        @foreach($errors->all() as $err)
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <span class="font-medium">Danger alert!</span> {{ $err }}.
        </div>
    @endforeach
    @endif
        <form class="space-y-6" action="{{ route('register.action') }}" method="POST">
        @csrf
        <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
            <div class="mt-2">
            <input id="name" name="name" type="text" value="{{ old('name') }}" required class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
            <div class="mt-2">
            <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">No Telp</label>
            <div class="mt-2">
            <input id="telp" name="telp" type="number" required class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div>
            <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <!-- <div class="text-sm">
                <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
            </div> -->
            </div>
            <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div>
            <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password Confirmation</label>
            </div>
            <div class="mt-2">
            <input id="password" name="password_confirm" type="password" autocomplete="current-password" required class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
        </div>
    </form>
  </div>
</div>
</body>
</html>