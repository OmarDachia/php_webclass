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
          13.	WAP to read the age of a candidate and determine whether it is eligible for casting his/her own vote.
            </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
                <label for="">Age:</label>
                <input type="number" name="age" placeholder="Age">
           </p>

           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
            // $temp= $_POST['temp'];
            $age = $_POST['age'];

            echo "To be registered as a voter, an individual must be:\n
                    <ol>
                        <li>A citizen of Nigeria;</li>
                        <li>Has attained the age of eighteen (18) years;</li>
                        <li>Ordinarily resident, work in, originate from the Local Government Area (LGA), Council, ward covered by the registration officers of the Commission for registration as a voter;</li>
                        <li>Free from any incapacity to vote under any law in Nigeria;</li>
                        <li>Present him/herself to the registration officer of the Commission for registration as a voter; and</li>
                        <li>Must not be subject to any incapacity to vote under any law in Nigeria.</li>
                    </ol>";


            if(age>18)
            {
                echo "Your are eligible to Vote";
            }
            else
            {
                echo "Your are eligible to Vote";
            }
          ?>
        </div>
    </div>

</body>
</html>