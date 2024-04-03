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
          <p>7.	WAP to calculate 
            <ol>
                <li>(a+b)^2</li>
                <li>(a+b)^3</li>
                <li>(a^2-b^2)</li>
            </ol>	
            </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
               <label for="">a</label>
               <input type="text" name="a" value="" >
            </p>
           <p>
                <label for="">b</label>
                <input type="number" name="b">
           </p>
           

           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
             
             $num1= $_POST['num1'];
             $num2 = $_POST['num2'];
             $num3 = $_POST['num3'];
             $num4= $_POST['num4'];
             $num5 = $_POST['num5'];
             $num4= $_POST['num4'];
             $num5 = $_POST['num5'];
             

             echo "Number 1: ".$num1."<br/>Number 2: ".$num2."<br/>Number 3: ".$num3."<br/>Number 4: ".$num4."<br/>Number 5: ".$num5."<br/>Number 6: ".$num6."<br/>Number 7: ".$num7;

             echo "<br/>Average is ((num1+num2+num3+num4+num1+$num4+num1)/7): ". (($num1+$num2+$num3+$num4+$num1+$num4+$num1)/7);
             
          ?>
        </div>
    </div>

</body>
</html>