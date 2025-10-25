<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Header with Animation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobileMenu');
            if (menu.classList.contains('max-h-0')) {
                menu.classList.remove('max-h-0', 'opacity-0');
                menu.classList.add('max-h-96', 'opacity-100');
            } else {
                menu.classList.remove('max-h-96', 'opacity-100');
                menu.classList.add('max-h-0', 'opacity-0');
            }
        }
    </script>
</head>

<body class="bg-gray-50">
    <header class="bg-gradient-to-r from-yellow-400 via-orange-400 to-red-500 shadow-lg py-4">
        <div class="flex justify-between items-center max-w-7xl mx-auto px-8">
            <!-- Logo -->
            <a href="home.php" class="text-4xl font-bold text-white tracking-wide hover:scale-105 transition-transform duration-300">
                <span class="drop-shadow-md">🏫 School</span>
            </a>

            <!-- Navigation Links (Desktop) -->
            <nav class="space-x-6 hidden md:flex">
                <a href="home.php" class="text-white text-xl font-medium hover:text-yellow-100 transition duration-300">Home</a>
                <a href="class.php" class="text-white text-xl font-medium hover:text-yellow-100 transition duration-300">Class</a>
                <a href="teachers.php" class="text-white text-xl font-medium hover:text-yellow-100 transition duration-300">Teachers</a>
                <a href="students.php" class="text-white text-xl font-medium hover:text-yellow-100 transition duration-300">Students</a>
                <a href="section.php" class="text-white text-xl font-medium hover:text-yellow-100 transition duration-300">Sections</a>
                <a href="student_registion_form.php" class="text-white text-xl font-medium hover:text-yellow-100 transition duration-300">Registration</a>
            </nav>


            <!-- Mobile Menu Button -->
            <button onclick="toggleMenu()" class="md:hidden text-white text-3xl focus:outline-none">☰</button>
        </div>

        <!-- Mobile Menu with Animation -->
        <nav id="mobileMenu" class="overflow-hidden transition-all duration-500 ease-in-out max-h-0 opacity-0 flex flex-col bg-gradient-to-r from-yellow-400 via-orange-400 to-red-500  text-white text-lg font-medium px-8 py-2 space-y-3 md:hidden rounded-b-2xl">
            <a href="home.php" class="hover:text-yellow-100 transition duration-300">Home</a>
            <a href="class.php" class="hover:text-yellow-100 transition duration-300">Class</a>
            <a href="teachers.php" class="hover:text-yellow-100 transition duration-300">Teachers</a>
            <a href="students.php" class="hover:text-yellow-100 transition duration-300">Students</a>
            <a href="section.php" class="hover:text-yellow-100 transition duration-300">Sections</a>
            <a href="student_registion_form.php" class="hover:text-yellow-100 transition duration-300">Registration</a>
        </nav>
    </header>
</body>

</html>