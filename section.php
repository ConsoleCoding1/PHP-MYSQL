<?php
include("./config.php");
if (isset($_REQUEST['submit'])) {
    $section = $_REQUEST["section"];
    $sqlQuery = "INSERT INTO schoolstudents (`roll_no`, `first_name`,`last_name`,`MobNo`,`class`) VALUES (NULL, 'Krish', 'Kuamar Sah', '919381390520', '9')";
    $student = $conn->prepare($sqlQuery);
    $result = $student->execute();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section</title>
</head>

<body>
    <?php include('./header.php') ?>
    <h1 class="text-center text-3xl">Section</h1>
    <div class="flex justify-center my-5">
        <table class="border border-gray-400 border-collapse px-2 mr-10">
            <tr>
                <th class="border border-gray-400 border-collapse px-2 py-2">Sections</th>
            </tr>
            <tr>
                <td class="border border-gray-400 border-collapse px-2 py-2">a</td>
            </tr>
        </table>
        <div class="">

            <form method="post" action="students.php">
                <div class="grid sm:grid-cols-2 gap-8">
                    <div>
                        <label class="text-slate-900 text-xl font-medium mb-2 block">Enter Secion</label>
                        <input name="section" type="text" class="bg-slate-100 w-full text-slate-900 text-xl px-4 py-3 rounded-md focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter Section" />
                    </div>
                </div>

                <div class="mt-12">
                    <button name="submit" type="submit" class="mx-auto block min-w-32 py-3 px-6 text-xl font-medium tracking-wider rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none cursor-pointer">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
    <?php include('./footer.php') ?>
</body>

</html>