<?php
function myFunc($msg = "Hello", $name = "User")
{
    return "$msg - $name";
}

echo myFunc("Hi", "everyone") . "<br>";
echo myFunc("Assalamu Alaikom", "John Doe") . "<br>";
echo myFunc() . "<br>";
echo myFunc("Wow") . "<br>";
echo myFunc(name: "wow", msg: "Sobai") . "<br>";

// recursive function 
function decrementTo1($n)
{
    if ($n <= 1) {
        echo 1 . "<br>";
    } else {
        echo $n . "<br>";
        decrementTo1($n - 1);
    }
}

decrementTo1(10);