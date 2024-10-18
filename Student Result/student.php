<?php

$marks = [46,46,46,46,46,46];

$totalMarks = array_sum($marks);

$averageMarks = $totalMarks / count($marks);

switch (true) {
  case ($averageMarks<100 && $averageMarks>=80 ):
      $echo = 'A+';
      break;
  case ($averageMarks<79 && $averageMarks>=70 ):
      $echo = 'A';
      break;
  case ($averageMarks<69 && $averageMarks>=60 ):
      $echo = 'A-';
      break;
  case ($averageMarks<59 && $averageMarks>=50 ):
      $echo = 'B';
      break;
  case ($averageMarks<49 && $averageMarks>=40 ):
      $echo = 'C';
      break; 
  case ($averageMarks<39 && $averageMarks>=33 ):
     $echo = 'D';
     break;   
  default:
     $echo = 'F';
}

// Output:
echo "Total Mark: $totalMarks\n";
echo "Average Mark: $averageMarks\n";
echo "Grade: $echo\n";
?>