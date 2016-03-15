<!DOCTYPE html>
<html>
<head>
    <title>Temp converter</title>
</head>
<body>

    <h1><b>Temperatuur's waarde:</b></h1>
    <form action="" method="post">
        
		<select name="start_convert">
            <option value="fahrenheit">
                Fahrenheit
            </option>
            <option value="celsius">
                Celsius
            </option>
        </select> <input name="value" type="text"> <input name="waarde" type=
        "submit" value="Convert"><br>
       
	   <?php
                    
            /* van celsius naar fahrenheit*/
            function c2f ($value){
                $fahrenheit=$value/5*9+32;
                return $fahrenheit;
            }

            /*van fahrenheit naar celsius*/
            function f2c ($value){
                $celsius=($value-32)/9*5;
                return $celsius;
            }

           
                   if(isset($_POST['waarde']))
                {
                $start_convert=$_POST['start_convert'];
                $value=$_POST['value'];
                             
                if($start_convert=='fahrenheit')
                {
                $celsius=f2c($value);
                echo "Fahrenheit $value = $celsius Celsius";
                }            
                                                            
                if($start_convert=='celsius')
                {
                $fahrenheit=c2f($value);
                echo "Celsius  $value = $fahrenheit Fahrenheit";
                }
                                        
                                        
                }                        

                ?>
    </form>
</body>
</html>