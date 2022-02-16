<?php

// main.php

include("Stack.php");
include("Queue.php");

$s = new Stack();
$q = new Queue();

for($i=1; $i<=5; $i++)
{
    $a = readline("Upisite broj ".$i.": ");
    $s->Push($a);
    $q->Enqueue($a);
}

echo "=== STACK ===\n";

while($b = $s->Pop())
{
    echo $b . "\n";
}

echo "=== QUEUE ===\n";

while($b = $q->Dequeue())
{
    echo $b . "\n";
}

?>