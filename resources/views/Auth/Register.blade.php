<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Create Account</title>
</head>
<body class="bg-slate-50 flex items-center justify-center min-h-screen p-4">

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md border border-gray-100">
        <!-- Header -->
        <div class="text-center mb-10">
            <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">Create Account</h2>
            <p class="text-gray-500 mt-2">Join us and start your journey</p>
        </div>

        <!-- Registration Form -->
        <form action="/register" method="POST" class="space-y-5">
            @csrf
            <!-- Full Name Field -->
            <div>
                <label for="name" class="block text-sm font-semibold text-gray-700">Full Name</label>
                <input type="text" id="name" name="name" required
                    class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                    placeholder="John Doe">
            </div>

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700">Email Address</label>
                <input type="email" id="email" name="email" required
                    class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                    placeholder="name@company.com">
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                    placeholder="••••••••">
            </div>

            <!-- Confirm Password Field -->
            <div>
                <label for="confirm-password" class="block text-sm font-semibold text-gray-700">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required
                    class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                    placeholder="••••••••">
            </div>

            <!-- Terms and Conditions -->
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="terms" type="checkbox" required
                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
                </div>
                <label for="terms" class="ml-3 text-sm text-gray-600">
                    I agree to the <a href="#" class="text-blue-600 hover:underline">Terms and Conditions</a>
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-xl text-sm px-5 py-3 text-center transition-all shadow-lg shadow-blue-200">
                Register Now
            </button>
        </form>

        <!-- Divider -->
        <div class="relative flex py-5 items-center">
            <div class="flex-grow border-t border-gray-200"></div>
            <span class="flex-shrink mx-4 text-gray-400 text-xs uppercase">Or</span>
            <div class="flex-grow border-t border-gray-200"></div>
        </div>

        <!-- Login Link -->
        <p class="text-center text-sm text-gray-600">
            Already have an account?
            <a href="/" class="font-bold text-blue-600 hover:text-blue-500 transition-colors">Sign in</a>
        </p>
    </div>

</body>
</html>
