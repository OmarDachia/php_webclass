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
          25.	WAP to check whether the given number is even or odd (By using conditional operator).
          </p>
        </div>
        <div id="input">
        <form action="" method="POST">
            <p>
                <label for="">Number:</label>
                <input type="text" name="number" placeholder="Enter a number">
           </p>
           
           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
            $number= $_POST['number'];
                        
            echo $number % 2==0? $number." is the Even": $number." is the Odd";
           
          ?>
        </div>
    </div>

</body>
</html>