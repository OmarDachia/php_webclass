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
          28.	WAP to calculate the Gross Salary of an employee.
                Assume:
            <hr>
            <table>
                <tr>
                    <th>BASIC SALARY</th>
                    <th>DA</th>
                    <th>HRA</th>
                </tr>
                <tr>
                    <th><1500</th>
                    <th>90% of Basic Salary</th>
                    <th>10% of Basic Salary</th>
                </tr>
                <tr>
                    <th>>=1500</th>
                    <th>98% of Basic Salary</th>
                    <th>500</th>
                </tr>

            </table>
          </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
                <label for="">Basic Salary:</label>
                <input type="text" name="basic_salary" placeholder="Enter a Basic Salary">
           </p>
           
           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
            $basic_salary= $_POST['basic_salary'];
            // $post_utme= $_POST['post_utme'];
            
            if($basic_salary<1500)
            {
                $DA = (90/100)*$basic_salary;
                $HRA = (10/100)*$basic_salary;
            }
            else if($basic_salary>=1500)
            {
                $DA = (98/100)*$basic_salary;
                $HRA = 500;
            }

            echo "Gross Salary of an employee : ". ($DA + $HRA + $basic_salary); 
           
          ?>
        </div>
    </div>

</body>
</html>