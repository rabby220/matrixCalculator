<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2*2 Matrix Calculator</title>
    <style>
        h1{
            color:red;
        }
        h3{
            color: green;
        }
        

        .button1, .button2,  .button3{
            font-size: 35px;
            font-family: Ubuntu;
            color: white;
            background:  #4CAF50;
            border-radius: 10px;
            


        }

        .button1:hover{
            background: #f44336;
            color:  white;
           
        }
        .button2:hover{
            background: #f44336;
            color:  white;
            

        }
        .button3:hover{

            background: #f44336;
            color:  white;
            
           
        }

        .in1, .in2, .in3, .in4, .in5, .in6, .in7, .in8{

            color: yellow;
            background: gray;
            font-size:25px;

        }

        .in9, .in10, .in11, .in12{
            color: #4CAF50;
            background:  white;
            font-size:25px;
        }



    </style>
</head>
<?php

    $result1 = "";
    $result2 = "";
    $result3 = "";
    $result4 = "";

    if(isset($_POST['operator']))
    {
        $number_1 = $_POST['num1_a11'];
        $number_2 = $_POST['num2_a12'];
        $number_3 = $_POST['num3_a21'];
        $number_4 = $_POST['num4_a22'];
        $number_5 = $_POST['num5_a11'];
        $number_6 = $_POST['num6_a12'];
        $number_7 = $_POST['num7_a21'];
        $number_8 = $_POST['num8_a22'];
        $operator = $_POST['operator'];

        

        if(is_numeric($number_1) && is_numeric($number_2) && is_numeric($number_3) && is_numeric($number_4) && is_numeric($number_5) && is_numeric($number_6) && is_numeric($number_7) && is_numeric($number_8))  //check number is numeric or not

        {

            if($operator == "A + B")

            {
           
                $result1 = $number_1 + $number_5;
                $result2 = $number_2 + $number_6;
                $result3 = $number_3 + $number_7;
                $result4 = $number_4 + $number_8;
    
            }
    
        else if($operator == "A - B")
            {
           
                $result1 = $number_1 - $number_5;
                $result2 = $number_2 - $number_6;
                $result3 = $number_3 - $number_7;
                $result4 = $number_4 - $number_8;
    
            }
    
        else 
            {
           
                $result1 = ($number_1 * $number_5) + ($number_2 * $number_7);
                $result2 = ($number_1 * $number_6) + ($number_2 * $number_8);
                $result3 = ($number_3 * $number_5) + ($number_4 * $number_7);
                $result4 = ($number_3 * $number_6) + ($number_4 * $number_8);
    
            }

        }                               
    
        
    }
    



?>



<body>
     
<h1><marquee> 2X2 Matrix Calculator: </marquee></h1>
    
    <form method = "POST">

        <h3> Matrix A: </h3>
       
       
        <input class = "in1" type="number" placeholder = "element a11" value = "<?php echo $number_1;?>" name = "num1_a11">

        <input class = "in2" type="number" placeholder = "element 12" value = "<?php echo $number_2;?>" name = "num2_a12"><br><br>

        <input class = "in3"type="number" placeholder = "element a21" value = "<?php echo $number_3;?>" name = "num3_a21">
        <input class = "in4"type="number" placeholder = "element a22" value = "<?php echo $number_4;?>" name = "num4_a22"><br>

        <h3> Matrix B: </h3>
      
        <input class = "in5"type="number" placeholder = "element a11" value = "<?php echo $number_5;?>" name = "num5_a11">
        <input class = "in6"type="number" placeholder = "element a12" value = "<?php echo $number_6;?>" name = "num6_a12"><br><br>
        <input class = "in7"type="number" placeholder = "element a21" value = "<?php echo $number_7;?>" name = "num7_a21">
        <input class = "in8"type="number" placeholder = "element a22" value = "<?php echo $number_8;?>" name = "num8_a22"><br>

        <h3> Result: </h3>
       
        <input class = "in9"name = "result1" placeholder = "element a11" value = "<?php echo $result1; ?>" >
        <input class = "in10"name = "result2" placeholder = "element a12" value = "<?php echo $result2; ?>"><br><br>
        <input class = "in11"name = "result3" placeholder = "elementa 21" value = "<?php echo $result3; ?>">
        <input class = "in12"name = "result4" placeholder = "element a22" value = "<?php echo $result4; ?>"><br><br>

       


        
        <input class = "button1" type="Submit" value = "A + B" name = "operator">
        <input class = "button2" type="Submit" value = "A - B" name = "operator">
        <input class = "button3" type="Submit" value = "A * B" name = "operator">
        

        



    </form>


</body>
</html>