<?php
$a="apple";
echo"input string $a";
$rev=strrev($a);
echo"<br/>output string $rev";
if($a==$rev){
    echo"palindrome ";
}else{
    echo" Not palindrome";
}
?>