<?php
class DivideByNegitive extends Exception{}
try
{
    $A = 10;
    $B = -1;
    // echo $C;

     throw new DivideByNegitive("Divide by negative exception occurred");
   $C = $A / $B;

}
catch( DivideByNegitive $e)
{
    printf("Exception: %s", $e->getMessage());
echo"<br>";
// echo $A;
echo"<br>";


}
finally{
    echo "my name is bijay basnet";
}
?>