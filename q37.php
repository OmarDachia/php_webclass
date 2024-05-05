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
          37.	WAP to print sum of following series 1+1/4+1/7+1/10+1/13+1/16+1/19+1/22+1/25

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
            for($i=1;$i<=9;$i+=3)
            {
                $sum += 1/$i;
                echo $sum;
            }

            echo "using while";

            $j=1;
            while($j<=9){
                $sum += 1/$i;
                $j++;
                echo $sum;

            }
           
          ?>
        </div>
    </div>

</body>
</html>