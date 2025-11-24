<?php
function localVar()
{
    $localVar = "I am local variable. ";
    echo $localVar;
}
function globalVar()
{
    global $globalVar;
}
localVar();

?>