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
          23.	WAP to calculate and print the Electricity bill of a given customer. 
          The customer id., name and unit consumed by the user should be taken from the keyboard 
          and display the total amount to pay by the customer. 
          
          The charges are as follow:
                Cost of Energy (Unit) in kw = N22.5.
                *To be Entered from kyboard*
                -Total Energy Consumed
                -To amount To be paid
                -Outstanding Balance.
          </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
                <label for="">Customer ID:</label>
                <input type="text" name="customer_id" placeholder="Enter a Customer ID">
           </p>
           <p>
                <label for="">Customer Name:</label>
                <input type="text" name="customer_id" placeholder="Enter a Customer Name">
           </p>
           
           <p>
                <label for="">Unit:</label>
                <input type="number" name="unit" placeholder="Enter a Unit">
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