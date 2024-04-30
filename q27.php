<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 3</title>
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
          <p>27.	WAP to calculate the percentage of a student in 5 subjects and then find his grade accordingly. </p>
        </div>
        <div id="input">
        <form action="" method="POST">
           <p>
               <label for="">Subject 1</label>
               <input type="text" name="sub1" value="" >
            </p>
           <p>
                <label for="">Subject 2</label>
                <input type="number" name="sub2">
           </p>
           <p>
                <label for="">Subject 3</label>
                <input type="number" name="sub3">
           </p>
           <p>
                <label for="">Subject 4</label>
                <input type="number" name="sub4">
           </p>
           <p>
                <label for="">Subject 5</label>
                <input type="number" name="sub5">
           </p>

           <input type="submit" value="Compute" name="submit"/>
        </form>
        </div>
        <div id="result">
          <?php 
            //  print_r($_POST);
             
             $sub1= $_POST['sub1'];
             $sub2 = $_POST['sub2'];
             $sub3 = $_POST['sub3'];
             $sub4= $_POST['sub4'];
             $sub5 = $_POST['sub5'];
             

             echo "Subject 1: ".$sub1."<br/>Subject 2: ".$sub2."<br/>Subject 3: ".$sub3."<br/>Subject 4: ".$sub4."<br/>Subject 5: ".$sub5;
            $percentage = (($sub1+$sub2+$sub3+$sub4+$sub1)/500)*100;
            $grade="";

            if($percentage>69)
            {
                $grade = "A";
            }
            else if ($percentage>59){
                $grade = "B";
            }
            else if ($percentage>49){
                $grade = "C";
            }
            else if ($percentage>44){
                $grade = "D";
            }
            else if ($percentage>39){
                $grade = "E";
            }
            else {
                $grade = "F";
            }

             echo "Grade is ". $grade ;
             
          ?>
        </div>
    </div>

</body>
</html>