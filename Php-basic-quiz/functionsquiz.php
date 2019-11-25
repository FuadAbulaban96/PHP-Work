<?php

echo "Homework Q1  : <br><br>";


function Recursive_sum($num)
{
  if($num ==1)
    {
	   return 1;
    }
  else 
    {	
	   return $num + Recursive_sum($num-1);
    }
}
$number=Recursive_sum(10);
echo"The Recursive Sum of Your Number Is : ".$number;
echo "<br><br><hr>";
//------------------------------------------------------------//

echo "Homework Q2  : <br><br>";

class  ATM
{
    public function deliver( $note )
    {
        // code to grab that not from the cash boxes...
    }
}

$notes = new SplFixedArray(5);
$notes[0] = 100;
$notes[1] = 50;
$notes[2] = 20;
$notes[3] = 10;
$notes[4] = 5;

$notesKey = 0;

$withdraw = 920;
$allocated = 500;

$deliver = new SplQueue();

// work out biggest notes for remaining value and queue
while($allocated < $withdraw)
{
    $remains  = ($withdraw-$allocated) % $notes[$notesKey];
    $numNotes = (($withdraw-$allocated)-$remains)/$notes[$notesKey];
    for( $i = 0; $i < $numNotes; $i++ )
    {
        $allocated += $notes[$notesKey];
        $deliver->enqueue($notesKey);
    }
    ++$notesKey;
}

$atm = new ATM();
while(!$deliver->isempty())
{
     $atm->deliver($notes[$deliver->dequeue()]);
}
echo $remains;

?>