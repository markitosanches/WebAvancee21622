<?php

require_once 'class/Student.php';
require_once 'class/Teacher.php';

$student = new Student("Lisa", 15, "Pie IX", null, "514-444-7777");



echo "<h1>Student</h1>";
echo $student->getProp();

$teacher = new Teacher("Paul");

echo "<h1>Teacher</h1>";
echo $teacher->getProp();