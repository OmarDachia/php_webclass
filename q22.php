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
          22.	Write a program to find the eligibility of admission for a professional course based on the following criteria:
            <ol>
                <li>Jamb score >=180</li>
                <li>Post utme >=170</li>
            </ol>
          </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
                <label for="">Grade:</label>
                <input type="text" name="grade" placeholder="Enter a grade">
           </p>
           
           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
            $grade= $_POST['grade'];
            
            if($grade == 'A')
            {
                echo "Excellent";
            }
            else if($grade == 'B')
            {
                echo "Very Good";
            }
            else if($grade == 'C')
            {
                echo "Good";
            }
            else if($grade == 'D')
            {
                echo "Poor";
            }
            else if($grade == 'E')
            {
                echo "Fair";
            }
            else  if($grade == 'F')
            {
                echo "Fail";
            }
            else
            {
                echo "Sorry, unfutunately you have invalid input";
            }
           
          ?>
        </div>
    </div>

</body>
</html>