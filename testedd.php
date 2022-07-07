<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
</style>
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
$edd_array = array(
       			array("A", "B", "C", "D", "E" ),
	         	array(11, 29, 31, 1, 2 ),
	         	array(61, 45, 31, 33,32 )
      );



include("The_challenge_of_sequencing.php");

$edd1 = new The_challenge_of_sequencing();

$edd1->show_initial_data($edd_array,"Problem Description:One machine have 5 task for processing, we know the processing time and delivery time for each task, we can processing this task with earliest due date.. ");

$edd1->edd($edd_array);



?>