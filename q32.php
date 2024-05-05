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
          32.	WAP to print first 10 natural nos.
          </p>
        </div>
        <!-- <div id="input">
        <form action="" method="POST">
           <p>
                <label for="">operations:</label>
                <input type="text" name="operator" placeholder="Enter a operator">
           </p>
           
           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div> -->
        <div id="result">
          <?php 
            //  print_r($_POST);
            echo "using for loop";
            for($i=1;$i<=10;$i++)
            {
                echo $i;
            }

            echo "using while";

            $j=1;
            while($j<=10){
                echo $j;
            }
          ?>
        </div>
    </div>

</body>
</html>