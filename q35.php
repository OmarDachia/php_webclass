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
          35.	WAP to print the following series:
                i.	10,9,8,…..1<br/>
                ii.	2,4,6,8,…..20<br/>
                iii.	10,13.5,17,20.5<br/>
          </p>
        </div>
        <!-- <div id="input">
        <form action="" method="POST">
           <p>
                <label for="">operations:</label>
                <input type="text" name="operator" placeholder="Enter a operator">
           </p>
           
           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div> -->
        <div id="result">
          <?php 
            //  print_r($_POST);
            for($i=10;$i>0;$i--)
            {
                echo $i.", ";
            }
           
            for($i=2;$i<=20;$i++)
            {
                echo $i.", ";
            }

            for($i=10;$i<=20.5;$i+=1.5)
            {
                echo $i.", ";
            }
          ?>
        </div>
    </div>

</body>
</html>