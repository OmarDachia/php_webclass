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
          24.	WAP to show the use of conditional operator (Greater among two numbers)
          </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
                <label for="">First Number:</label>
                <input type="text" name="first_number" placeholder="Enter a First number">
           </p>

           <p>
                <label for="">Second Number:</label>
                <input type="text" name="second_number" placeholder="Enter a Second number">
           </p>
                     
           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
            $first_number= $_POST['first_number'];
            $second_number= $_POST['second_number'];
            
            echo $first_number == $second_number? $first_number." is the largest": $second_number." is the largest";
           
          ?>
        </div>
    </div>

</body>
</html>