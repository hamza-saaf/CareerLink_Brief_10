<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .logo-color {
            color: #0a66c2; /* LinkedIn blue color */
        }
        .hover-logo-color:hover {
            color: #004182; /* Darker LinkedIn shade for hover */
        }
        .bg-logo-color {
            background-color: #0a66c2; /* LinkedIn blue background */
        }
        .hover-bg-logo-color:hover {
            background-color: #004182; /* Darker LinkedIn shade for hover background */
        }
    </style>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Sidebar -->
    <div class="flex">
        <div class="w-64 bg-slate-400 text-black h-screen">
            <img src="src/images/careerlink.svg" alt="CareerLinklogo">
            <div class="p-4 text-xl font-bold text-white">CareerLink Admin</div>
            <nav class="mt-5 font-bold">
                <a href="#" class="block py-2.5 px-4 rounded hover-bg-logo-color">Dashboard</a>
                <a href="#" class="block py-2.5 px-4 rounded hover-bg-logo-color">Categories</a>
                <a href="#" class="block py-2.5 px-4 rounded hover-bg-logo-color">Tags</a>
                <a href="#" class="block py-2.5 px-4 rounded hover-bg-logo-color">Job Offers</a>
                <a href="#" class="block py-2.5 px-4 rounded hover-bg-logo-color">Recruiters</a>
                <a href="#" class="block py-2.5 px-4 rounded hover-bg-logo-color">Users</a>
                <a href="#" class="block py-2.5 px-4 rounded hover-bg-logo-color">Reports</a>
                <a href="#" class="block py-2.5 px-4 rounded hover-bg-logo-color">Notifications</a>
                <a href="#" class="block py-2.5 px-4 rounded hover-bg-logo-color">Settings</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-10">
            <h1 class="text-3xl font-bold mb-5 logo-color">Admin Dashboard</h1>
            
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-2xl font-bold logo-color">Job Offers</h2>
                    <p class="mt-4 text-gray-600">Number of job offers by category.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-2xl font-bold logo-color">Tags</h2>
                    <p class="mt-4 text-gray-600">Most used tags by recruiters.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-2xl font-bold logo-color">Active Recruiters</h2>
                    <p class="mt-4 text-gray-600">Top recruiters by job posts.</p>
                </div>
            </div>

            <!-- Recent Job Offers -->
            <div class="mt-10">
                <h2 class="text-2xl font-bold mb-4 logo-color">Recent Job Offers</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm font-semibold logo-color">Job Title</th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm font-semibold logo-color">Category</th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm font-semibold logo-color">Posted By</th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm font-semibold logo-color">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-900">Full Stack Developer</td>
                                <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-900">Technology</td>
                                <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-900">Tech Corp</td>
                                <td class="px-6 py-4 border-b border-gray-200 text-sm text-blue-500 cursor-pointer hover-logo-color">Archive</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-900">Marketing Specialist</td>
                                <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-900">Marketing</td>
                                <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-900">Creative Agency</td>
                                <td class="px-6 py-4 border-b border-gray-200 text-sm text-blue-500 cursor-pointer hover-logo-color">Archive</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Users Management -->
            <div class="mt-10">
                <h2 class="text-2xl font-bold mb-4 logo-color">Manage Users</h2>
                <p class="text-gray-600">Add, edit, delete users and assign roles.</p>
                <button class="mt-4 bg-logo-color text-white px-4 py-2 rounded hover-bg-logo-color">Add New User</button>
            </div>

            <!-- Reports and Analytics -->
            <div class="mt-10">
                <h2 class="text-2xl font-bold mb-4 logo-color">Reports & Analytics</h2>
                <p class="text-gray-600">Generate detailed reports on platform activity.</p>
                <button class="mt-4 bg-logo-color text-white px-4 py-2 rounded hover-bg-logo-color">View Reports</button>
            </div>
        </div>
    </div>
</body>
</html>
