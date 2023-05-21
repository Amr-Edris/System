<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks</title>
    <style>
    body {
        line-height: 10vh;
        color: #f44336;
    }

    .marks {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 13vw;
        height: 13vh;
        border: 2px solid #f44336;
        color: black;
        font-size: 1.5vw;
        letter-spacing: 1px;
        border-radius: 8px;
        transition-duration: 0.4s;
    }

    .marks:hover {
        background-color: #f44336;
        color: white;
    }
    </style>
</head>

<body>
    <h1>Inserting Studnet's Marks</h1>
    <form method="post">
        <div>
            <label> Student Id : </label>
            <input type="number" name="student_id">
        </div>
        <div>
            <label> Subject Id : </label>
            <input type="numbeer" name="subject_id">
            <div>
                <label> Studnet First Exam : </label>
                <input type="number" name="student_first_exam" value="0">
            </div>
            <div>
                <label> Studnet Second Exam : </label>
                <input type="number" name="student_second_exam" value="0">
            </div>
            <div>
                <label> Studnet Practical Exam : </label>
                <input type="number" name="student_practical_exam" value="0">
            </div>
            <div>
                <label> Studnet Final Exam : </label>
                <input type="number" name="student_final_exam" value="0">
            </div>
            <button class="marks" type="submit">Insert</button>
    </form>
</body>

</html>

<?php
//Remove Errors :
error_reporting(0);
//Start Connection To MySql :
    $connection=mysqli_connect('localhost','root','','system');
//Store Current Data In Local Variables : 
    $student_id=$_POST['student_id']; 
    $subject_id=$_POST['subject_id'];
    $student_first_exam=$_POST['student_first_exam'];
    $student_second_exam=$_POST['student_second_exam'];
    $student_practical_exam=$_POST['student_practical_exam'];
    $student_final_exam=$_POST['student_final_exam'];
    $student_first_result=$student_first_exam+$student_second_exam+$student_practical_exam;
    $student_final_result=$student_first_result+$student_final_exam;
//Update And Comunicate : 
    $Insert_Marks=" UPDATE marks set first_exam='$student_first_exam' , second_exam ='$student_second_exam' , practical_exam
    ='$student_practical_exam' ,first_result='$student_first_result' ,final_exam='$student_final_exam',final_result='$student_final_result' where student_id='$student_id' and
    subject_id='$subject_id'";
    mysqli_query($connection,$Insert_Marks);    
?>