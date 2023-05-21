<?php 
    //Remove Errors :
        error_reporting(0);
    //Start Connection To MySql :
        $connection=mysqli_connect('localhost','root','','system');
    //Store Current Data In Local Variables : 
        $student_id=$_POST['student_id'];
        $student_password=$_POST['student_password'];
    //Select And Comunicate :
        $select="SELECT student_id,student_password FROM students WHERE student_id='$student_id' && student_password='$student_password'";
        $result= mysqli_query($connection,$select);
    //Store Database Data In Local Variables :
    $row=mysqli_fetch_assoc($result);
    $studnet_database_id=$row['student_id'];
    $student_database_password=$row['student_password'];
    //Redirecting After Clicking The Button :?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Student_Logging_In.css">
    <title>Logging In</title>
</head>

<body>
    <div class="container">
        <form action="<?php
            if(mysqli_num_rows($result)>0)
            {
            if($student_id==$studnet_database_id && $student_password == $student_database_password)
            echo 'Show_Student_Subjects_Marks.php';
            }
        ?>" method="post">
            <h3>Login Here</h3>
            <label for="username">Username</label>
            <input type="text" placeholder="Email or Phone" required id="username" name="student_id">

            <label for="password">Password</label>
            <input type="password" placeholder="Password" required id="password" name="student_password">

            <button>Log In</button>
        </form>

    </div>
</body>

</html>