<?php
/*
Class The challenge of sequencing 1.0.1
Author: Roberto Aleman
Website: ventics.com


In job scheduling on a machine can implement different policies or rules of priority in particular seek to improve the performance of the programming in a
particular indicator (minimize the amount of backlog, minimizing the average delay, minimize the maximum delay, minimize time average flow, etc.),
however, the makespan or time required to complete the work will be independent identical to the priority rule.
There are many rules of priority but the most used is the rule according to the prioritization by time of delivery, or EDD.
This sequence in increasing order of their dates of upcoming delivery. Priority is given to tasks or products shorter earliest delivery or delivery.
It is used as an initial solution to sequence
minimizing the number of late tasks (Moore algorithm).

Management methods and recursive functions are used to sort and process the base matrix and the resulting vectors

The following data shows the process:

Total flow time
Average flow time
average delay
Number of backlog
Maximum delay
Average Time Delay

How to use it:

You must send as a parameter an array of N x 3,
where N is the number of processes to be sequenced,
Nx1 time column is the process (typically for machines expressed in days,
but can be a relative time unit) is Nx2 the delivery date column
which is expressed in the same unit as Nx1, in this case days.


*/
class The_challenge_of_sequencing {



public function edd($edd_array)
{

	echo "<br/><b>Calculate the processing the delivery based on Earliest Due Date </b><br/>";
	array_multisort( $edd_array[2],SORT_ASC,$edd_array[0],$edd_array[1] ); // sort array by edd priority
    $len = (count($edd_array, COUNT_RECURSIVE)-3) / 3 ;  // get length to work
//var_dump($edd_array);

$ftime  = array();
for ($i = 0; $i < $len; $i++)
		{
			$ftime[$i] =  $edd_array[1][$i] ;
		}

$lenf = count($ftime);

$ftime[0] = $edd_array[1][0] ;

for ($i = 1; $i < $lenf; $i++)
	{
    	$ftime[$i] = $ftime[$i-1]+ $edd_array[1][$i] ;
	}

$totalftime = array_sum($ftime) ;

$fstop  = array();
$counterr = -1;
$totalStop = 0;
for ($i = 0; $i < $lenf; $i++)
	{

			$fstop[$i] = $ftime[$i] - $edd_array[2][$i] ;

			if ($fstop[$i]<0)
				{
						$fstop[$i]= 0;
					}
			else
				{
						$fstop[$i] = $ftime[$i] - $edd_array[2][$i] ;
						$counterr = $counterr +1;
						$totalStop = $totalStop + $fstop[$i];
					}
}
echo "<br/> ------------------------------------------ "  ;

echo "<br/>Total flow time : <b>".$totalftime." days </b>"  ;
echo "<br/>Average flow time : <b>".$totalftime / $lenf."  days </b>";
echo "<br/>Average delay : <b>". $totalStop /$lenf."  days</b>";
echo "<br/>Number of backlog : <b>".$counterr." task</b>" ;
echo "<br/>Maximum delay : <b>". max($fstop)."  days</b>"; //max function get the max value from this vector
echo "<br/>Average Time Delay : <b>".$totalStop."  days</b>";

echo "<br/> ------------------------------------------ "  ;



}
public function show_initial_data($edd_array,$description)

{
echo "<h3>".$description."</h3>";
  $len = (count($edd_array, COUNT_RECURSIVE)-3) / 3 ;  // get length to work

	echo '
	<table width="auto" height="120" border="0">
	  <tr>
    <td colspan="5" align="center"><b>Initial Values<b/></td>
  </tr>
  <tr>
    <td>Task</td>
    <td>Processing Time</td>
    <td>Delivery Time</td>
  </tr>
';

for ($i = 0; $i < $len; $i++)
		{
			echo "<tr><td>".$edd_array[0][$i]."</td><td>".$edd_array[1][$i]."</td><td>".$edd_array[2][$i]."</td></tr>" ;
		}

	echo "</table><br/>";

	echo '
	<table width="auto" height="120" border="0">
	  <tr>    <td colspan="5" align="center"><b>Sorted Array based on delivey due date<b/></td>  </tr>
  <tr>
    <td>Task</td>
    <td>Processing Time</td>
    <td>Delivery Time</td>
  </tr>
';
 array_multisort( $edd_array[2],SORT_ASC,$edd_array[0],$edd_array[1] ); // sort array by edd priority
for ($i = 0; $i < $len; $i++)
		{
			echo "<tr><td>".$edd_array[0][$i]."</td><td>".$edd_array[1][$i]."</td><td>".$edd_array[2][$i]."</td></tr>" ;
		}

	echo "</table>";
	}




}
?>