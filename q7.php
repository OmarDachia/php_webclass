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
             
             $a= $_POST['a'];
             $b = $_POST['b'];
                          

             echo "a: ".$a."<br/>b: ".$b;
             ?>

            <ol>
                <li>(a+b)^2 is <?php  echo pow($a+$b,2);?></li>
                <li>(a+b)^3 is <?php  echo pow($a+$b,3);?></li>
                <li>(a^2-b^2) is <?php  echo pow($a,2)-pow($b,2);?></li>
            </ol>
        </div>
    </div>

</body>
</html>