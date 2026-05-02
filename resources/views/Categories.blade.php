<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>Categories - POS System</title>
</head>

<body class="bg-gray-100 font-sans"
    x-data="{ openAdd: false, openEdit: false, openDelete: false, currentCategory: {name: 'Drinks', id: 1} }">

    <div class="flex min-h-screen">
        <!-- Sidebar (Same as Dashboard) -->
        <aside class="w-64 bg-slate-900 text-white flex flex-col">
            <div class="p-6 text-2xl font-bold text-center border-b border-slate-800">
                <span class="text-blue-400">POS</span> System
            </div>
            <nav class="flex-1 mt-6 px-4 space-y-2">
                <a href="/dashboard"
                    class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-lg transition">
                    <i class="fa-solid fa-chart-line mr-3"></i>
                    <span>Dashboard</span>
                </a>
                <a href="/products"
                    class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-lg transition">
                    <i class="fa-solid fa-box mr-3"></i>
                    <span>Products</span>
                </a>
                <a href="/categories" class="flex items-center px-4 py-3 bg-blue-600 text-white rounded-lg transition">
                    <i class="fa-solid fa-layer-group mr-3"></i>
                    <span>Categories</span>
                </a>
            </nav>
            <div class="p-4 border-t border-slate-800">
                <a href="/logout"
                    class="flex items-center w-full px-4 py-3 text-red-400 hover:bg-red-500/10 rounded-lg transition">
                    <i class="fa-solid fa-right-from-bracket mr-3"></i>
                    <span class="font-semibold">Logout</span>
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="h-16 bg-white shadow-sm flex items-center justify-between px-8">
                <h1 class="text-xl font-semibold text-gray-800">Manage Categories</h1>
                <div class="flex items-center space-x-4">
                    <img src="https://ui-avatars.com/api/?name=Admin&background=0D8ABC&color=fff" alt="Profile"
                        class="w-10 h-10 rounded-full border">
                </div>
            </header>

            <!-- Content Area -->
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-lg font-bold text-gray-700">Category List</h2>
                    <button @click="openAdd = true"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-semibold transition flex items-center shadow-md">
                        <i class="fa-solid fa-plus mr-2"></i> Add New Category
                    </button>
                </div>

                <!-- Category Table Card -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <table class="w-full text-left">
                        <thead class="bg-gray-50 border-b border-gray-100 text-gray-600 text-sm">
                            <tr>
                                <th class="p-4 font-semibold w-20">ID</th>
                                <th class="p-4 font-semibold">Category Name</th>
                                <th class="p-4 font-semibold text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 divide-y divide-gray-100">
                            @forelse ($category as $cate)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="p-4 text-gray-500">{{ $cate->id }}</td>
                                <td class="p-4 font-medium text-gray-800">{{ $cate->name }}</td>
                                <td class="p-4 text-center">
                                    <button @click="openEdit = true"
                                        class="text-blue-500 hover:text-blue-700 mx-2 transition">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button @click="openDelete = true"
                                        class="text-red-500 hover:text-red-700 mx-2 transition">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="p-6 text-center text-gray-400">
                                    No categories found
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <!-- MODAL: ADD CATEGORY -->
    <div x-show="openAdd"
        class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/50 backdrop-blur-sm p-4" x-cloak>
        <div class="bg-white rounded-xl shadow-xl w-full max-w-sm overflow-hidden" @click.away="openAdd = false">
            <div class="p-6 border-b flex justify-between items-center bg-gray-50">
                <h3 class="font-bold text-gray-800">NEW CATEGORY</h3>
                <button @click="openAdd = false" class="text-gray-400 hover:text-gray-600"><i
                        class="fa-solid fa-xmark"></i></button>
            </div>
            <form action="/categories" method="POST">
                @csrf
                <div class="p-6">
                    <label class="block text-sm font-bold text-gray-700 mb-2">Category Name</label>
                    <input type="text" placeholder="e.g. Beverages" name="name"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition">
                </div>
                <div class="p-6 border-t bg-gray-50 flex justify-end space-x-3">
                    <button @click="openAdd = false" class="px-4 py-2 text-gray-600 font-semibold">Cancel</button>
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-blue-700 transition">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL: EDIT CATEGORY -->
    <div x-show="openEdit"
        class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/50 backdrop-blur-sm p-4" x-cloak>
        <div class="bg-white rounded-xl shadow-xl w-full max-w-sm overflow-hidden" @click.away="openEdit = false">
            <div class="p-6 border-b flex justify-between items-center bg-gray-50">
                <h3 class="font-bold text-gray-800">EDIT CATEGORY</h3>
                <button @click="openEdit = false" class="text-gray-400 hover:text-gray-600"><i
                        class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="p-6">
                <label class="block text-sm font-bold text-gray-700 mb-2">Category Name</label>
                <input type="text" x-model="currentCategory.name"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition">
            </div>
            <div class="p-6 border-t bg-gray-50 flex justify-end space-x-3">
                <button @click="openEdit = false" class="px-4 py-2 text-gray-600 font-semibold">Cancel</button>
                <button
                    class="bg-green-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-green-700 transition">Update</button>
            </div>
        </div>
    </div>

    <!-- MODAL: DELETE CONFIRMATION -->
    <div x-show="openDelete"
        class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/50 backdrop-blur-sm p-4" x-cloak>
        <div class="bg-white rounded-xl shadow-xl w-full max-w-xs p-6 text-center" @click.away="openDelete = false">
            <div
                class="w-16 h-16 bg-red-100 text-red-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                <i class="fa-solid fa-trash-can"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">Delete Category?</h3>
            <p class="text-gray-500 mt-2 text-sm">Are you sure you want to delete "<span x-text="currentCategory.name"
                    class="font-bold"></span>"?</p>
            <div class="mt-6 flex justify-center space-x-3">
                <button @click="openDelete = false"
                    class="px-4 py-2 text-gray-500 font-semibold text-sm">Cancel</button>
                <button
                    class="bg-red-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-red-700 transition text-sm">Yes,
                    Delete</button>
            </div>
        </div>
    </div>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</body>

</html>
