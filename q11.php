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
          <p>11. WAP to convert temperature from degree Celsius to Fahrenheit & vice-versa. Use the formula : F=9C/5 + 32 fdsfsdfsdf </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
               <label for="">Choose Input Temperature</label>
               <fieldset>
                    <label for="">Celsius</label>
                    <input type="radio" name="temp" value="Celcius" >
                    <label for="">Fahrenheit</label>
                    <input type="radio" name="temp" value="Fahrenheit" >
               </fieldset>
               
            </p>
           <p>
                <label for="">Temprature</label>
                <input type="text" name="temp_input" placeholder="Second Number">
           </p>

           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
             
            $temp= $_POST['temp'];
            $temp_input = $_POST['temp_input'];
            
            echo $temp=="Celcius"? "Fahrenheit =" .(9*($temp_input/5) + 32): "Celcius= ".(($temp_input - 32) * 5/9);
          ?>
        </div>
    </div>

</body>
</html>