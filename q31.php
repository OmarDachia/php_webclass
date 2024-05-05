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
          31.	WAP to print a name a message 10 times.
          </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
                <label for="">Name:</label>
                <input type="text" name="name" placeholder="Enter a Name">
           </p>
           <p>
                <label for="">Massage:</label>
                <input type="text" name="msg" placeholder="Enter a Massage">
           </p>
           
           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
            $name= $_POST['name'];
            $msg= $_POST['msg'];
            
            echo "using for loop";
            for($i=0;$i>0;$i++)
            {
                echo $name. " " . $msg;
            }

            echo "using while";

            $j=0;
            while($j>0){
                echo $name. " " . $msg;
            }
           
          ?>
        </div>
    </div>

</body>
</html>