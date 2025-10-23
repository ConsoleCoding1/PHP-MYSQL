<?php
include("./config.php");

if (isset($_POST['submit'])) {
    $className = $_POST["className"];

    $sqlQuery = "INSERT INTO `tbclasses` (`id`, `class_name`) VALUES (NULL, $className)";
    echo $sqlQuery;

    $students = $conn->prepare("
        INSERT INTO `tbclasses` (`id`, `class_name`) 
        VALUES (NULL, $className)
    ");

    $result = $students->execute();
    $succ;
    $err;
    if ($result) {
        $succ = "Record inserted successfully!";
    } else {
        $err = "Error inserting record.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>
    <?php include("./header.php"); ?>
    <div class="flex justify-center gap-5 m-10">
        <table class="border border-gray-400 border-collapse px-5 p-2">
            <tr>
                <th class="border border-gray-400 border-collapse px-5 p-2">id</th>
                <th class="border border-gray-400 border-collapse px-5 p-2">Class</th>
            </tr>
            <?php
            $classList = $conn->prepare("SELECT * FROM `tbclasses`");
            $classList->execute();
            $result2 = $classList->fetchAll();
            foreach ($result2 as $class) {
            ?>
                <tr>
                    <td class="border border-gray-400 border-collapse px-5 p-2"><?=htmlspecialchars($class["id"])?></td> 
                    <td class="border border-gray-400 border-collapse px-5 p-2"><?=htmlspecialchars($class["class_name"])?></td> 
                </tr>
            <?php
            }
            ?>
        </table>
        <form action="" method="post" class="">
            <input type="text" placeholder="Enter Class Name" class="border-2 border-amber-500 px-5 py-2" name="className" required>
            <br>
            <br>
            <button class="bg-amber-500 hover:bg-red-500 px-10 py-3" type="submit" name="submit">Submit</button>
        </form>
    </div>
    <?php include("./footer.php"); ?>
</body>
</html>