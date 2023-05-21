<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <style>
    body {
        background-color: #e7e7e7;
        line-height: 10vh;
        color: #555555;
    }

    .students {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 13vw;
        height: 13vh;
        border: 2px solid #555555;
        color: black;
        font-size: 1.5vw;
        letter-spacing: 1px;
        border-radius: 8px;
        transition-duration: 0.4s;

    }


    .student:hover {
        background-color: #f44336;
        color: white;
    }
    </style>
</head>

<body>
    <div>
        <h1> Inserting Students </h1>
        <form method="POST">
            Name :
            <input type="text" name="student_name">
            <br>
            Gender :
            <input type="radio" id="M" name="student_gender" value="M">
            <label for="M">Male</label>

            <input type="radio" id="F" name="student_gender" value="F">
            <label for="F">Female</label>
            <br>
            birth Day :
            <input type="text" name="student_birth">
            <br>
            Phone Number :
            <input type="text" name="student_phone">
            <br>
            Password :
            <input type="password" name="student_password">
            <button class="students" type="submit">submit</button>
        </form>
    </div>

    <?php
    //Remove Errors :
        error_reporting(0);
    //Start Connection To MySql :
        $connection=mysqli_connect('localhost','root','','system');
    //Store Current Data In Local Variables : 
        $student_id=$_POST['student_id']; 
        $student_name =$_POST['student_name'];
        $student_gender=$_POST['student_gender'];
        $student_birth=$_POST['student_birth'];
        $student_phone=$_POST['student_phone'];
    /////////////////////////////////////////// 
        $subject_id=$_POST['subject_id'];
        $subject_name=$_POST['subject_name'];
        $subject_hours=$_POST['subject_hours'];
    ///////////////////////////////////////////
        $student_password=$_POST['student_password'];
        $student_first_exam=$_POST['student_first_exam'];
        $student_second_exam=$_POST['student_second_exam'];
        $student_practical_exam=$_POST['student_practical_exam'];
        $student_final_exam=$_POST['student_final_exam'];
    //Insert And Comunicate :
        $Insert=" INSERT INTO students (student_name,student_gender,student_birth,student_password) VALUES ('$student_name','$student_gender','$student_birth','$student_password')";
        $result=mysqli_query($connection,$Insert);
    ?>
</body>

</html>