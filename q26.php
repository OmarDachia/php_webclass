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
          26.	WAP to print the largest of three numbers.
          </p>
        </div>
        <div id="input">
        <form action="" method="POST">
            <p>
                <label for="">First Number:</label>
                <input type="text" name="first_number" placeholder="Enter a First number">
           </p>

           <p>
                <label for="">Second Number:</label>
                <input type="text" name="second_number" placeholder="Enter a Second number">
           </p>
           <p>
                <label for="">Third Number:</label>
                <input type="text" name="third_number" placeholder="Enter a Third number">
           </p>
           
           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
            $jamb_score= $_POST['jamb_score'];
            $post_utme= $_POST['post_utme'];
            
            if($jamb_score>=180)
            {
                if($post_utme>=170)
                {
                    echo "Excellent";
                }
                else
                {
                    echo "Sorry, unfutunately you did make the cut. Your Post UTME ".$post_utme." is below the marker";
                }
            }
            else
            {
                echo "Sorry, unfutunately you did make the cut. Your Jamp Score ".$jamb_score." is below the marker";
            }
           
          ?>
        </div>
    </div>

</body>
</html>