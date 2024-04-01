<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 3</title>
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
          <p>3. WAP to input principal, rate, time & find the simple interest. </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
               <label for="">Principal</label>
               <input type="text" name="principal" value="" >
            </p>
           <p>
                <label for="">Rate</label>
                <input type="number" name="rate" min=0 max=100>
           </p>
           <p>
                <label for="">Time</label>
                <input type="number" name="time">
           </p>

           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
             
             $principal= $_POST['principal'];
             $rate = $_POST['rate'];
             $time = $_POST['time'];

             echo "Principal: ".$principal."<br/>Rate: ". $rate."<br>Time: ".$time;

             echo "<br/>Simple Interest: ". (($principal  * $rate * $time)/100);
             
          ?>
        </div>
    </div>

</body>
</html>