<?php

//The stack Start Here

// include('DataStructure/Stack.php');
// use App\DataStructure\Stack;

// $stack = new Stack(4);


// for($i = 1; !$stack->isFull(); $i++)
// {
//     $stack->push($i);
//     echo "The current is : ". $stack->current();
//     echo "<br>";
// }

// while(!$stack->isEmpty())
// {
//     echo "The current is : ". $stack->current();
//     echo "<br>";
//     echo $stack->pop();
//     echo "<br>";    
// }

//End of Stack

//Start the Circular Queue

// include('DataStructure/Queue.php');

// use App\DataStructure\Queue;

// $queue = new Queue(5);

// for($i = 1 ; !$queue->isFull(); $i++)
// {
//     $queue->enqueue($i);
// }

// while(!$queue->isEmpty())
// {
//     echo $queue->dequeue()."<br>";
// }

// End of The Queue

// start of linked list

include('DataStructure/LinkedList.php');
use App\DataStructure\LinkedList;

$list = new LinkedList(8);

$list->insert(1);
$list->insert(3);
$list->insert(2);
$list->insert(5);
$list->insert(7);

echo $list->search(7);
