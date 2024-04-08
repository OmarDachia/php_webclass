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
          14.	WAP to read the value of an integer m and display the value of n, n is 1 when m is larger than 0, 0 when m is 0 and -1 when m is less than 0.
            </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
                <label for="">m:</label>
                <input type="number" name="age" placeholder="Age">
           </p>

           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
            // $temp= $_POST['temp'];
            $m = $_POST['m'];
            $n;

            if(m>0)
            {
                $n =1;
                echo $n;
            }
            else if(m==0)
            {
                $n =0;
                echo $n;
            }
            else if(m<0)
            {
                $n=-1;
                echo $n;
            }
          ?>
        </div>
    </div>

</body>
</html>