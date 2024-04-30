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
          29.	WAP to display days of week i.e. Monday to Sunday using switch-case statement.
          </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
                <label for="">Week:</label>
                <input type="text" name="week" placeholder="Enter a week">
           </p>

           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
            $week= $_POST['week'];
            
            switch($week){
                case 1:
                    echo "Sunday";
                    break;
                case 2:
                    echo "Monday";
                    break;
                case 3:
                    echo "Tuesday";
                    break;
                case 4:
                    echo "Wednesday";
                    break;
                case 5:
                    echo "Thursday";
                    break;
                case 6:
                    echo "Firday";
                    break;
                case 7:
                    echo "Saturday";
                    break;

            }
           
          ?>
        </div>
    </div>

</body>
</html>