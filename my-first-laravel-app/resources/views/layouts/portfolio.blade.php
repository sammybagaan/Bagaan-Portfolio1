<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Web Developer</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/workspaces/Bagaan-Portfolio1/my-first-laravel-app/public/css/portfolio.css') }}">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            @apply bg-gray-900 text-gray-100;
        }
        .navbar-brand {
            @apply text-2xl font-bold;
        }
        .nav-link {
            @apply px-4 py-2 rounded-lg transition duration-300 ease-in-out;
            @apply hover:bg-gray-700 hover:text-white;
        }
        .section {
            @apply min-h-screen py-24 flex items-center justify-center;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="fixed top-0 left-0 w-full bg-gray-800 bg-opacity-75 backdrop-blur-md z-50 shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Brand -->
            <a class="navbar-brand text-indigo-400" href="#home">GSITE</a>

            <!-- Mobile Menu Button -->
            <button class="lg:hidden text-gray-100 focus:outline-none" onclick="toggleMenu()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    
                </svg>
            </button>

            <!-- Navigation Items -->
            <div id="nav-menu" class="hidden lg:flex flex-col lg:flex-row space-y-2 lg:space-y-0 lg:space-x-8">
                
                <a href="#home" class="nav-link text-white">Home</a>                
                <a href="#about" class="nav-link text-white">About</a>                
                <a href="#contact" class="nav-link text-white">Contact</a>
            </div>
        </div>
    </nav>

    <!-- JavaScript for Mobile Menu -->
    <script>
        const toggleMenu = () => {
            const menu = document.getElementById('nav-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                menu.classList.add('flex', 'absolute', 'top-16', 'left-0', 'w-full', 'bg-gray-800', 'bg-opacity-90', 'flex-col', 'items-center', 'py-4', 'rounded-b-lg');
            } else {
                menu.classList.add('hidden');
                menu.classList.remove('flex', 'absolute', 'top-16', 'left-0', 'w-full', 'bg-gray-800', 'bg-opacity-90', 'flex-col', 'items-center', 'py-4', 'rounded-b-lg');
            }
        };
    </script>

    <!-- Main Content Sections -->

    <!-- Home Section -->
    <section id="home" class="section bg-gray-900 text-center">
        <div class="max-w-4xl p-8 rounded-lg">
            <h1 class="text-6xl font-extrabold text-white mb-4">Global Reciprocal College<span class="text-indigo-400">GRC</span></h1>
            <p class="text-xl text-gray-400 mb-8">MISSION</p>
            <p>The College of Computer Studies (CCS) develops a society for competitive IT professionals through values-based quality education guided by the
                 principles and best practices of the IT Program in order to promote nation building.</p>
            <p class="text-xl text-gray-400 mb-8">VISION</p>
            <p>GRC-College of Computer Studies envisions producing quality IT professionals with values.</p>
            <a href="#projects" class="inline-block bg-indigo-600 text-white font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 ease-in-out hover:bg-indigo-700">View My Work</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section bg-gray-800 text-center">
        <div class="max-w-4xl p-8 rounded-lg">
            <h2 class="text-5xl font-bold text-white mb-4">PROGRAM DESCRIPTION</h2>
            <p class="text-lg text-gray-300">The BS Information Technology program includes the study of the utilization of both hardware and software technologies involving planning, 
                installing, customizing, operating, managing and administering; and maintaining information technology infrastructure that provides computing solutions to address the needs of an organization..</p>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section bg-gray-900">
        <div class="max-w-6xl w-full p-8 text-center">
            <h2 class="text-5xl font-bold text-white mb-12">About</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project Card 1 -->
                <div class="bg-gray-700 p-6 rounded-lg shadow-xl">
                    <h3 class="text-2xl font-semibold text-indigo-300 mb-2">Global Reciprocal Colleges’ Graduation Day 2025</h3>
                    <p class="text-gray-400">Events / Global Reciprocal Colleges
                    Global Reciprocal Colleges’ Graduation Day 2025 The 13th Global Reciprocal Colleges Commencement Exercises were held on July 24, 2025, at the 
                    University of the Philippines, Quezon City, marking a significant milestone for both the graduating class and the institution. 
                    With the theme “Transformed to Lead, Committed to Reciprocate,” the event celebrated not only academic achievement […].</p>
                    <img src="https://grc.edu.ph/wp-content/uploads/2025/08/Graduation-2025-Ms-Heidi-1024x577.jpeg" alt=https://grc.edu.ph/wp-content/uploads/2025/08/Graduation-2025-Ms-Heidi-1024x577.jpeg
                </div>
                <!-- Project Card 2 -->
                <div class="bg-gray-700 p-6 rounded-lg shadow-xl">
                    <h3 class="text-2xl font-semibold text-indigo-300 mb-2">GRC Sportsfest 2024</h3>
                    <p class="text-gray-400">Events / Global Reciprocal Colleges
                    The Global Reciprocal Colleges (GRC) hosted its much-awaited Sports Festival from April 24–26, 2024, where students from various colleges within the organization 
                    demonstrated their athletic abilities and spirit of competition. The event, which took place across different venues, 
                    witnessed an impressive display of skill and camaraderie among participants. Divided into two main categories, indoor and</p>
                    <img src="https://grc.edu.ph/wp-content/uploads/2024/05/FB_IMG_1714789198276-1024x683.jpg" alt=https://grc.edu.ph/wp-content/uploads/2024/05/FB_IMG_1714789198276-1024x683.jpg>
                </div>
                <!-- Project Card 3 -->
                <div class="bg-gray-700 p-6 rounded-lg shadow-xl">
                    <h3 class="text-2xl font-semibold text-indigo-300 mb-2">GRC Camp 2024 @ Highlands Iba, Zambales</h3>
                    <p class="text-gray-400">Events / Global Reciprocal Colleges
                    DIVERGENT: Know your way Nestled amidst the serene beauty of the Iba Zambales Highlands, Camp 2024 sponsored by Global Surge 
                    Camps unfolded its doors to students of all year levels on March 22nd and 23rd, 2024. With a total of 1,300 participants, 
                    including students and facilitators from various backgrounds such as professors, admin staff, and</p>
                    <img src="https://grc.edu.ph/wp-content/uploads/2024/05/418726168_742433734584369_3751672870079643009_n-1024x576.jpg" alt="https://grc.edu.ph/wp-content/uploads/2024/05/418726168_742433734584369_3751672870079643009_n-1024x576.jpg">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section bg-gray-800 text-center">
        <div class="max-w-4xl p-8 rounded-lg">
            <h2 class="text-5xl font-bold text-white mb-4">Contact</h2>
            <p class="text-lg text-gray-300 mb-8">Admissions</p>
            <p>09519637603 – 09283875420</p>
            <p class="text-lg text-gray-300 mb-8">Registrar</p>
            <p>8-452-2945</p>
            <p class="text-lg text-gray-300 mb-8">Cashier 2</p>
            <p>09602723578</p>
            <div class="flex justify-center space-x-6">
                <!-- Social Media Icons (placeholders) -->
                <a href="#" class="text-gray-400 hover:text-indigo-400 transition duration-300">

                </a>
                <a href="#" class="text-gray-400 hover:text-indigo-400 transition duration-300">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0H5C2.239 0 0 2.239 0 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5V5c0-2.761-2.239-5-5-5zm-4.75 9.75h-2.5v7.5H11.75v-7.5zm-5 0H6.75v7.5H5.75v-7.5zm9 0h-2.5v7.5H14.75v-7.5zm-8-3h1v1.5h-1v-1.5z"/></svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-indigo-400 transition duration-300">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2.028 17.587v-9.174l8.033 4.587-8.033 4.587z"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-500 py-8 text-center">
        <div class="container mx-auto px-4">
            <p>© 2025 Portfolio. Built with <span class="text-indigo-400">Philippines CSS</span></p>
        </div>
    </footer>

</body>
</html>