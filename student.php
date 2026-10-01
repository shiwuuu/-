<?php

class Student {
    public $name;
    public $grades = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addGrade($grade) {
        $this->grades[] = $grade;
    }

    public function getAverage() {
        return array_sum($this->grades) / count($this->grades);
    }

    public function getInfo() {
        return $this->name . ": " . $this->grades;
    }
}

$student = new Student("Мария");
$student->addGrade(5);
$student->addGrade(4);
$student->addGrade(5);
echo $student->getAverage();