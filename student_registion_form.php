<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <script src="output.css"></script>
</head>

<body class="bg-gradient-to-r from-blue-500 to-indigo-600 ">
    <?php include 'header.php' ?>
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-2xl shadow-lg w-4xl max-w-md mt-5">
            <h2 class="text-3xl font-bold text-center text-indigo-700 mb-6">Student Registration</h2>

            <form action="#" method="POST" class="space-y-3 ">

                <!-- Name -->
                <div class="flex gap-5">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">First Name</label>
                        <input type="text" id="name" name="name" required
                            class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                    </div>
                    <div>
                        <label for="Middle" class="block text-sm font-medium text-gray-700">Middle Name</label>
                        <input type="text" id="Middle" name="Middle" required class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                    </div>
                    <div>
                        <label for="last" class="block text-sm font-medium text-gray-700">Last Name</label>
                        <input type="text" id="last" name="last" required
                            class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                    </div>
                </div>


                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                </div>

                <!-- Phone -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="tel" id="phone" name="phone"
                        class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                </div>

                <!-- Gender -->
                <div>
                    <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                    <select id="gender" name="gender" required
                        class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                        <option value="">Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>

                <!-- Date of Birth -->
                <div>
                    <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                    <input type="date" id="dob" name="dob"
                        class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                </div>

                <!-- Class -->
                <div>
                    <label for="class" class="block text-sm font-medium text-gray-700">Class</label>
                    <input type="text" id="class" name="class"
                        class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                </div>

                <!-- Submit -->
                <button type="submit"
                    class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 transition duration-300">
                    Register
                </button>
            </form>
        </div>
    </div>

</body>

</html>