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
          34.	WAP to calculate SI for 3 sets of p, n & r.
          </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
                <label for="">P 1:</label>
                <input type="text" name="p1" placeholder="Enter a Principal 1">
           </p>
           <p>
                <label for="">P 2:</label>
                <input type="text" name="p2" placeholder="Enter a Principal 2">
           </p>
           <p>
                <label for="">P 3:</label>
                <input type="text" name="p3" placeholder="Enter a Principal 3">
           </p>

           <p>
                <label for="">N 1:</label>
                <input type="text" name="n1" placeholder="Enter a N 1">
           </p>
           <p>
                <label for="">N 2:</label>
                <input type="text" name="n2" placeholder="Enter a N 2">
           </p>
           <p>
                <label for="">N 3:</label>
                <input type="text" name="n3" placeholder="Enter a N 3">
           </p>

           <p>
                <label for="">T 1:</label>
                <input type="text" name="t1" placeholder="Enter a T 1">
           </p>
           <p>
                <label for="">T 2:</label>
                <input type="text" name="t2" placeholder="Enter a T 2">
           </p>
           <p>
                <label for="">T 3:</label>
                <input type="text" name="t3" placeholder="Enter a T 3">
           </p>
           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
            for($i=1;$i<=3;$i++)
            {
                echo "P".$i = $_POST['p'.$i]*$_POST['n'.$i]*$_POST['t'.$i];
            }
           
          ?>
        </div>
    </div>

</body>
</html>