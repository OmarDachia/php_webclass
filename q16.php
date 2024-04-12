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
                <label for="">Number:</label>
                <input type="number" name="no" placeholder="Number">
           </p>

           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
            // $temp= $_POST['temp'];
            $no = $_POST['no'];

            if($no % 2 == 0)
            {
                echo $no ." is an even number";
            }
            else
            {
                echo $no ." is an odd number";
            }
           
          ?>
        </div>
    </div>

</body>
</html>