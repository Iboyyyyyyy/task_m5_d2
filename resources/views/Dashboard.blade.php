<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Dashboard</title>
</head>
<body class="bg-gray-100 font-sans">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-900 text-white flex flex-col">
            <!-- Logo / Brand -->
            <div class="p-6 text-2xl font-bold text-center border-b border-slate-800">
                <span class="text-blue-400">POS</span> System
            </div>

            <!-- Navigation Links -->
            <nav class="flex-1 mt-6 px-4 space-y-2">
                <a href="#" class="flex items-center px-4 py-3 bg-blue-600 rounded-lg transition">
                    <i class="fa-solid fa-chart-line mr-3"></i>
                    <span>Dashboard</span>
                </a>

                <a href="/products" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-lg transition">
                    <i class="fa-solid fa-box mr-3"></i>
                    <span>Products</span>
                </a>

                <a href="/categories" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-lg transition">
                    <i class="fa-solid fa-layer-group mr-3"></i>
                    <span>Categories</span>
                </a>
            </nav>

            <!-- Bottom Actions (Logout) -->
            <div class="p-4 border-t border-slate-800">
                <a href="/logout" class="flex items-center w-full px-4 py-3 text-red-400 hover:bg-red-500/10 rounded-lg transition">
                    <i class="fa-solid fa-right-from-bracket mr-3"></i>
                    <span class="font-semibold">Logout</span>
                </a>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 flex flex-col">
            <!-- Top Header -->
            <header class="h-16 bg-white shadow-sm flex items-center justify-between px-8">
                <h1 class="text-xl font-semibold text-gray-800">Welcome, Admin</h1>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-500 hover:text-gray-700">
                        <i class="fa-regular fa-bell text-xl"></i>
                    </button>
                    <img src="https://ui-avatars.com/api/?name=Admin&background=0D8ABC&color=fff" alt="Profile" class="w-10 h-10 rounded-full border">
                </div>
            </header>

            <!-- Content Container -->
            <div class="p-8">
                <!-- Simple Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <p class="text-gray-500 text-sm">Total Products</p>
                        <h3 class="text-2xl font-bold text-gray-800">1,240</h3>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <p class="text-gray-500 text-sm">Active Categories</p>
                        <h3 class="text-2xl font-bold text-gray-800">45</h3>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <p class="text-gray-500 text-sm">Today's Sales</p>
                        <h3 class="text-2xl font-bold text-green-600">$540.00</h3>
                    </div>
                </div>

                <!-- Placeholder for Table/List -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 min-h-[400px]">
                    <h2 class="text-lg font-bold text-gray-800 mb-4">Recent Inventory</h2>
                    <div class="border-2 border-dashed border-gray-200 rounded-lg h-64 flex items-center justify-center text-gray-400 text-sm">
                        Content for products or categories goes here...
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>
