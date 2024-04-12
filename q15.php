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
          15.	WAP to accept the height of a person in centimeter and categorize the person according to taller between greater than 165.0 and less than 196.0, dwarf less than 150.0 & average between greater than 149.0 and less than 166.0.
            </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
                <label for="">Height:</label>
                <input type="number" name="height" placeholder="height">
           </p>

           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
            // $temp= $_POST['temp'];
            $height = $_POST['height'];

            if($height<150.0)
            {
                
                echo "The person with height ".$height."cm is a Dwarf";
            }
            else if(height>149.0 && height<166.0)
            {
                echo "The person with height ".$height."cm is a average heighted";
            }
            else if(height>165.0 && height<196.0)
            {
                echo "The person with height ".$height."cm is a average heighted";
            }
          ?>
        </div>
    </div>

</body>
</html>