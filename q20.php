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
          20.	WAP to check whether a given year is leap or not
            </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
                <label for="">Year:</label>
                <input type="number" name="year" placeholder="Number">
           </p>
           
           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
            $year= $_POST['year'];
            
            if($year%2==0 && $year%100==0 && $year%400==0)
            {
                echo "Congratulation, Year ".$year." is a leap year";
            }
            else
            {
                echo "Sorry, unffurtunately Year ".$year." is not a leap year";
            }
           
          ?>
        </div>
    </div>

</body>
</html>