<?php 
    if(isset($_POST['submit'])){
        $A=$_POST['A'];
        $B=$_POST['B'];
        $C=$_POST['C'];
        $D=$_POST['A'];

        $a=$_POST['a'];
        $b=$_POST['b'];

        $aResult=  $A*$a +   ($B * pow($a,2) / 2  ) +   ($C * pow($a,3) / 3) +   ($D * pow($a,4) / 4 ) + exp($a) + (-(cos($a)));
        $bResult=  $A*$b +   ($B * pow($b,2) / 2  ) +   ($C * pow($b,3) / 3) +   ($D * pow($b,4) / 4 ) + exp($b) + (-(cos($b)));
        $result= ($bResult -  $aResult);    

    }


?>



<!DOCTYPE html>
<html>
    <head>
    <title>Ceng 111 Project</title>
        <style>
       .content{
            width: 50%;
            background-color: rgb(242 242 242);
            border-style: solid;
            border-width: thin;
            padding: 10px ;
            text-align: left;
       }
        input{
            width: 40px;
       }
        ul{
           list-style: none;
           padding-inline-start: 0px;
       }
        li{
             display: inline;
        }

        </style>
    </head>
    <body>

        <h5><?php // echo "CENG 111" ?></h5>


        <div class="content">
            <p> Definite Integral Calculation  </p>
                <form method="POST" action="">
                    <ul>
                            <li>f(x)=</li>

                            <li><input type="number" name="A"></li>
                            <li><label for="A">+</label></li>

                            <li><input type="number" name="B"> </li>
                            <li><label for="B">x+</label></li>

                            <li><input type="number" name="C"> </li>
                            <li><label for="C">x<sup>2</sup> + </label></li>

                            <li><input type="number" name="D"> </li>
                            <li><label for="D">x<sup>3</sup>+</label> exp(x) + cos(x) </li>                         
                    </ul>         
                   <ul style="padding-inline-start: 15px;">
                            <li><label for="a">a=</label></li>
                            <li><input type="number" name="a">,</li>

                            <li><label for="b"> b= </label></li>
                            <li><input type="number" name="b"> for  <span>&#8747;</span><sub>a</sub><sup>b</sup> <i>f(x)dx</i></li>
                    </ul>
                    <ul>
                            <li><input type="submit" name="submit" value="Submit" style="width: 70px; height: 30px;" ></li>
                    </ul>

                    <h1> <?php if(isset($_POST['submit'])){ echo "<span>&#8747</span> <sub>$a </sub><sup>$b</sup> <i>f(x)dx"; echo $result; 
                    }                   
                        ?>
                    </h1>
                    
            </form>
        </div>
    </body>
</html>
