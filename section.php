<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section</title>
</head>
<body>
    <?php include('./header.php') ?>
    <h1 class="text-center text-3xl">Students</h1>
    <div class="flex justify-center my-5">
        <table class="border border-gray-400 border-collapse px-2 mr-10">
            <tr>
                <th class="border border-gray-400 border-collapse px-2 py-2"></th>
            </tr>
            <?php
            $studentsList = $conn->prepare("SELECT * FROM `schoolstudents`");
            $studentsList->execute();
            $result2 = $studentsList->fetchAll();
            foreach ($result2 as $teacher) {

            ?>
                <tr>
                    <td class="border border-gray-400 border-collapse px-2 py-2"><?= $teacher['roll_no'] ?></td>
                    <td class="border border-gray-400 border-collapse px-2 py-2"><?= $teacher['first_name'] ?></td>
                    <td class="border border-gray-400 border-collapse px-2 py-2"><?= $teacher['last_name'] ?></td>
                    <td class="border border-gray-400 border-collapse px-2 py-2"><?= $teacher['MobNo'] ?></td>
                    <td class="border border-gray-400 border-collapse px-2 py-2"><?= $teacher['class'] ?></td>
                    						

                </tr>
            <?php
            }
            ?>
        </table> 
        <div class="max-w-1/2 max-sm:max-w-lg justify-center">

            <form method="post" action="students.php">
                <div class="grid sm:grid-cols-2 gap-8">
                    <div>
                        <label class="text-slate-900 text-xl font-medium mb-2 block">Enter Secion</label>
                        <input name="name" type="text" class="bg-slate-100 w-full text-slate-900 text-xl px-4 py-3 rounded-md focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter Section" />
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