<?php
    include("./config.php");
    if (isset($_REQUEST['submit'])) {
        $name = $_REQUEST["name"];
        $lname = $_REQUEST["lname"];
        $email = $_REQUEST["email"];
        $number = $_REQUEST["number"];
        $TClass = $_REQUEST["TClass"];
        $TSubject = $_REQUEST["TSubject"];
        $sqlQuery = "INSERT INTO teachers (`id`, `FName`,`LName`,`Email`,`MobNo`,`TClass`,`TSubject`) 
                    VALUES (NULL, '$name', '$lname','$email', $number, '$TClass', '$TSubject')";
        $teacher = $conn->prepare($sqlQuery);
        $result = $teacher->execute();
        if($result){
            echo "ins";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Registration Form</title>
    <link rel="stylesheet" href="output.css">
</head>

<body>
    <?php include("./header.php") ?>
    <div class="flex justify-center gap-3 py-10">
        <div>
            <table class="border border-gray-400 border-collapse px-2 mr-10">
                <tr>
                    <th class="border border-gray-400 border-collapse px-2 py-2">id</th>
                    <th class="border border-gray-400 border-collapse px-2 py-2">First Name</th>
                    <th class="border border-gray-400 border-collapse px-2 py-2">Last Name</th>
                    <th class="border border-gray-400 border-collapse px-2 py-2">Email</th>
                    <th class="border border-gray-400 border-collapse px-2 py-2">Mobile No.</th>
                    <th class="border border-gray-400 border-collapse px-2 py-2">Teacher Class</th>
                    <th class="border border-gray-400 border-collapse px-2 py-2">Teacher Subject</th>
                </tr>
                <?php
                    $teacherList = $conn->prepare("SELECT * FROM `teachers`");
                    $teacherList->execute();
                    $result2 = $teacherList->fetchAll();
                    foreach ($result2 as $teacher) {
                
                ?>
                    <tr>
                        <td class="border border-gray-400 border-collapse px-2 py-2"><?=$teacher['id']?></td> 
                        <td class="border border-gray-400 border-collapse px-2 py-2"><?=$teacher['FName']?></td> 
                        <td class="border border-gray-400 border-collapse px-2 py-2"><?=$teacher['LName']?></td> 
                        <td class="border border-gray-400 border-collapse px-2 py-2"><?=$teacher['Email']?></td> 
                        <td class="border border-gray-400 border-collapse px-2 py-2"><?=$teacher['MobNo']?></td> 
                        <td class="border border-gray-400 border-collapse px-2 py-2"><?=$teacher['TClass']?></td> 
                        <td class="border border-gray-400 border-collapse px-2 py-2"><?=$teacher['TSubject']?></td> 
                    </tr>
                <?php
                    }
                ?>
            </table>
            <div class="max-w-1/2 max-sm:max-w-lg justify-center">
    
                <form method="post" action="teachers.php">
                    <div class="grid sm:grid-cols-2 gap-8">
                        <div>
                            <label class="text-slate-900 text-xl font-medium mb-2 block">First Name</label>
                            <input name="name" type="text" class="bg-slate-100 w-full text-slate-900 text-xl px-4 py-3 rounded-md focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter name" />
                        </div>
                        <div>
                            <label class="text-slate-900 text-xl font-medium mb-2 block">Last Name</label>
                            <input name="lname" type="text" class="bg-slate-100 w-full text-slate-900 text-xl px-4 py-3 rounded-md focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter last name" />
                        </div>
                        <div>
                            <label class="text-slate-900 text-xl font-medium mb-2 block">Email Id</label>
                            <input name="email" type="text" class="bg-slate-100 w-full text-slate-900 text-xl px-4 py-3 rounded-md focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter email" />
                        </div>
                        <div>
                            <label class="text-slate-900 text-xl font-medium mb-2 block">Mobile No.</label>
                            <input name="number" type="number" class="bg-slate-100 w-full text-slate-900 text-xl px-4 py-3 rounded-md focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter mobile number" />
                        </div>
                        <div>
                            <label class="text-slate-900 text-xl font-medium mb-2 block">Techer Class</label>
                            <input name="TClass" type="text" class="bg-slate-100 w-full text-slate-900 text-xl px-4 py-3 rounded-md focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter Your Class" />
                        </div>
                        <div>
                            <label class="text-slate-900 text-xl font-medium mb-2 block">Teacher Subject</label>
                            <input name="TSubject" type="text" class="bg-slate-100 w-full text-slate-900 text-xl px-4 py-3 rounded-md focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter Your Subject" />
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
    </div>
    <?php include("./footer.php") ?>
</body>

</html>