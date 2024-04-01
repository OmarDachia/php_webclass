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
          <p>3. WAP to print area of circle, rectangle & square. </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
               <label for="">Radius</label>
               <input type="text" name="radius" value="" >
            </p>
           <p>
                <label for="">Length</label>
                <input type="number" name="length">
           </p>
           <p>
                <label for="">Width</label>
                <input type="number" name="width">
           </p>

           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
             
             $radius= $_POST['radius'];
             $length = $_POST['length'];
             $width = $_POST['width'];

             echo "Radiue: ".$radius."<br/>Area of Cycle Fomrula is PI*radius*radius ";

             echo "<br/>Area of Cycle: ". (PI * pow(radius,2));

             echo "Length: ".$length." width: ".$width."<br/>Area of Cycle Fomrula is length*width ";

             echo "<br/>Area of Rectangle: ". ($length * $width);

             echo "Length: ".$length." <br/>Area of Cycle Fomrula is length*length ";

             echo "<br/>Area of Rectangle: ". ($length * $length);
             
          ?>
        </div>
    </div>

</body>
</html>