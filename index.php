<?php

include('DataStructure/Stack.php');

use App\DataStructure\Stack;

$stack = new Stack(4);


for($i = 1; !$stack->isFull(); $i++)
{
    $stack->push($i);
    echo "The current is : ". $stack->current();
    echo "<br>";
}

while(!$stack->isEmpty())
{
    echo "The current is : ". $stack->current();
    echo "<br>";
    echo $stack->pop();
    echo "<br>";    
}