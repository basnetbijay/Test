<?php
class DivideByNegitive extends Exception{
    function getError(){
        echo "joor sey bolooo";
    }
}
try
{
    $A = 10;
    $B = -1;
    // echo $C;

     throw new DivideByNegitive();
   $C = $A / $B;

}
catch( DivideByNegitive $e)
{
    printf("Exception: %s", $e->getError());
echo"<br>";
// echo $A;
echo"<br>";


}
finally{
    echo "my name is bijay basnet";
}
?>