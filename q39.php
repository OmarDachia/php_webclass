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
          30.	WAP to display arithmetic operations using switch-case statement.
          </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
                <label for="">operations:</label>
                <input type="text" name="operator" placeholder="Enter a operator">
           </p>
           
           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
            $operator= $_POST['operator'];
            switch($operator){
                case "+":
                    echo "Addition";
                    break;
                case "-":
                    echo "Subtraction";
                    break;
                case "*":
                    echo "Multipication";
                    break;
                case "/":
                    echo "Division";
                    break;
                case "%":
                    echo "Modulo";
                    break;
            }
           
          ?>
        </div>
    </div>

</body>
</html>