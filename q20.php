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
          18.	WAP to accept two integers and check whether they are equal or not.
            </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
                <label for="">Number 1:</label>
                <input type="number" name="no1" placeholder="Number">
           </p>
           <p>
                <label for="">Number 2:</label>
                <input type="number" name="no2" placeholder="Number">
           </p>

           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
            $no1= $_POST['no1'];
            $no2 = $_POST['no2'];

            if($no1 === $no1)
            {
                echo $no1." and ". $no2 ." are equal";
            }
            else
            {
                echo $no1." and ". $no2 ." are not equal";
            }
           
          ?>
        </div>
    </div>

</body>
</html>