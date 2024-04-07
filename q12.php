<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
    <style>
        #main{
            margin:10%;
            background:#f7ffe6;
            
        }
        #header{
            background:#88cc00;
            text-align:center;
        }
        #input{
          padding-left:10%;
          padding-right:10%;
          padding-top:1%;
        }
    </style>
</head>
<body>
    <div id="main">
        <div id="header">
          <h1>Question</h1>
          <p>
            12.	WAP to calculate the Gross Salary of an employee.
                    Assume Gross Salary=Basic Salary+DA+HRA
                    DA=40% of Basic Salary
                    HRA=20% of Basic Salary
            </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
                <label for="">Basic Salary:</label>
                <input type="text" name="salary" placeholder="Basic Salary">
           </p>

           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
             
            // $temp= $_POST['temp'];
            $salary = $_POST['salary'];
            $DA = (40/100)*$salary;
            $HRA = (20/100)*$salary;


            echo "Gross Salary =" .($salary+$DA+$HRA);
          ?>
        </div>
    </div>

</body>
</html>