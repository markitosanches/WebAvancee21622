<?php

require_once 'class/Student.php';
require_once 'class/Teacher.php';

$student = new Student("Lisa");

echo "<h1>Student</h1>";
echo $student->getProp();

$teacher = new Teacher("Lisa");

echo "<h1>Teacher</h1>";
echo $teacher->getProp("Paul");