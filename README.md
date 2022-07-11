# tcos
The Challenge of Sequencing: Optimize task schedules based on earliest due date

This script is a PHP language implementation of Moore's Algorithm applied to Job Scheduling.

This is a class that can optimize task schedules based on earliest due date. It takes an array with values of tasks to be executed such as the time each task takes to execute and delivery time. 

The class processes the tasks schedules to minimize the number of late tasks and displays several metrics about the scheduled tasks, such as the total flow time, average flow time, average delay time, backlog time, maximum delay, average time delay.

When you need to manage many concurrent tasks, you need to rearrange their schedules, so they can be completed as soon as possible and at the same time avoid that they run late considering the desired finishing time limit.

This class can perform the necessary calculations with a set of scheduled tasks minimizing the number of tasks that may run late.

Moore's Algorithm applied to Job Scheduling.

In the context of the Priority Rules for Scheduling n Jobs on a Machine, Moore's Algorithm aims to minimize the number of late jobs, regardless of how late they are.

This criterion is especially useful when there are penalties for delay, which are sometimes triggered by failure to respond to a committed delivery date on time, even when the magnitude of the delay could have been minimal. The general description of the algorithm consists of 4 steps as described below:

Moore's algorithm
Step 1. Sort the jobs according to the priority rule EDD (Earliest Due Date).
Step 2. Select the first late job in the current sequence, say job i. If none are overdue, continue to Step 4.
Step 3. Consider jobs 1 through i. Reject the job with the longest processing time, go back to Step 2.
Step 4. Build the sequence that results from taking the current sequence and putting all the rejected jobs at the end.

If after performing the first iteration of Moore's Algorithm there is a new backlog (assuming that in iteration 1 a job was rejected, say job A), said job is rejected (say job B) and sent to the "end of the job". sequence”, meaning that from the perspective of the number of backlogs (target of the algorithm) it makes no difference whether the final sequence ends with A-B or B-A. If it is necessary to carry out a third iteration (or more), the same criteria are followed.

Roberto Alemán
