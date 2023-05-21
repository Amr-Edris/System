<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="subjects.css">
    <title>Subjects</title>
    <style>
    body {
        background-color: #e7e7e7;
        line-height: 10vh;
        color: #008cba;
    }

    .subjects {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 13vw;
        height: 13vh;
        border: 2px solid #008cba;
        color: black;
        font-size: 1.5vw;
        letter-spacing: 1px;
        border-radius: 8px;
        transition-duration: 0.4s;
    }

    .subjects:hover {
        background-color: #008cba;
        color: white;
    }
    </style>
</head>

<body>
    <div class="container1">
        <h1>Inserting Studnet's Subjects</h1>
        <form method="post">
            <div>
                <label> Student Id : </label>
                <input type="number" name="student_id">
            </div>
            <div>
                <label> Subject Id : </label>
                <input type="numbeer" name="subject_id">
                <button class="subjects" type="submit">Insert</button>
            </div>
        </form>
    </div>

    <?php 
//Remove Errors :
    error_reporting(0);
//Start Connection To MySql :
    $connection=mysqli_connect('localhost','root','','system');
//Store Current Data In Local Variables : 
    $student_id=$_POST['student_id']; 
    $subject_id=$_POST['subject_id'];
//Insert And Comunicate :
    $Insert_Subject="Insert Into marks(student_id,subject_id) values ('$student_id','$subject_id')";
    mysqli_query($connection,$Insert_Subject);
?>
</body>

</html>