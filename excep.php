<?php
class DivideByZeroException extends Exception {}
try
{
    $A = 10;
    $B = 0;

     throw new DivideByZeroException("Divide by Zero exception occurred");
     $C = $A / $B;
}
catch( DivideByZeroException $e)
{
    printf("Exception: %s", $e->getMessage());
echo"<br>";

}
finally{
    echo "my name is bijay basnet";
}
?>