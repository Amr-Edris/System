<?php
     //Remove Errors :
     error_reporting(0);
     //Start Connection To MySql :
     $connection=mysqli_connect('localhost','root','','system');
     //Select And Comunicate :
     $student_id=$_POST['student_id'];
     $select="SELECT subjects.subject_name, subjects.subject_hours, marks.first_exam, marks.second_exam, marks.practical_exam, marks.first_result, marks.final_exam, marks.final_result from students, subjects , marks where marks.student_id=students.student_id and subjects.subject_id=marks.subject_id and marks.student_id='$student_id';";
     $result= mysqli_query($connection,$select);
     $Avg=mysqli_query($connection,"Select Avg(final_result) from marks where student_id='$student_id'");
     $Avg_row=mysqli_fetch_assoc($Avg);
     $Sum=mysqli_query($connection,"Select Sum(subjects.subject_hours) from subjects ,marks where marks.subject_id=subjects.subject_id and marks.student_id='$student_id';");
     $Sum_row=mysqli_fetch_assoc($Sum);

     ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Show_Student_Subjects_Marks.css" />
    <title>Results</title>
</head>

<body>
    <div class="container">

        <table class="fl-table">
            <thead>
                <tr>

                    <th>Subject Name</th>
                    <th>Subject Hours</th>
                    <th>First Exam</th>
                    <th>Second Exam</th>
                    <th>Practical Exam</th>
                    <th>First Result</th>
                    <th>Final Exam</th>
                    <th>Final Result</th>
                </tr>
            </thead>
            <tbody>
                <?php while($Marks_row=mysqli_fetch_assoc($result))
                {?>
                <tr>
                    <td><?php echo $Marks_row['subject_name'] ?></td>
                    <td><?php echo $Marks_row['subject_hours'] ?></td>
                    <td><?php echo $Marks_row['first_exam'] ?></td>
                    <td><?php echo $Marks_row['second_exam']  ?></td>
                    <td><?php echo $Marks_row['practical_exam']  ?></td>
                    <td><?php echo $Marks_row['first_result'] ?></td>
                    <td><?php echo $Marks_row['final_exam'] ?></td>
                    <td><?php echo $Marks_row['final_result'] ?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <table class="fl-table f2-table">
            <thead>
                <tr>
                    <th>Total By Percent</th>
                    <th>Total By Point</th>
                    <th>Completed Hours</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td><?php echo $Avg_row['Avg(final_result)'] ?></td>
                    <td>0</td>
                    <td><?php echo $Sum_row['Sum(subjects.subject_hours)']?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>