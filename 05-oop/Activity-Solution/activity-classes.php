<?php
// spl_autoload_register();
require_once 'Professor/Professor.php';
require_once 'Student/Student.php';

$professor = new Professor\Professor('Charles Kingsfield', array(
					new Student\Student('Elwin Ransom'),
					new Student\Student('Maurice Phipps'),
					new Student\Student('James Dunworthy'),
					new Student\Student('Alecto Carrow')
			));
$professor->setTitle('Dr.');
$professor->printStudents();