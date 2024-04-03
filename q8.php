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
          <p>8.	WAP to find circumference of a circle.C = 2*PI*r</p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
               <label for="">Radius</label>
               <input type="number" name="radius" value="" >
            </p>
                     
           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
             
             $radius= $_POST['radius'];
            
            
             echo "Radius : ".$radius."<br> Circircumference of is ". (2*(22/7)*$radius);
             ?>
        </div>
    </div>

</body>
</html>