<?php
// File: StudentManagement.php

namespace App\School;

// Trait for Utility Methods
trait Formatter
{
    public function formatGrade($grade)
    {
        return strtoupper($grade);
    }
}

// Abstract Class
abstract class Person
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function getDetails();
}

// Student Class
class Student extends Person
{
    use Formatter;

    private $studentId;
    private $grade;

    public function __construct($name, $age, $studentId, $grade)
    {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
        $this->grade = $this->formatGrade($grade);
    }

    public function getDetails()
    {
        return "Student ID: {$this->studentId}, Name: {$this->name}, Age: {$this->age}, Grade: {$this->grade}";
    }

    public function getStudentId()
    {
        return $this->studentId;
    }
}

// Class untuk Manajemen Data Siswa
class StudentManager
{
    private $students = [];

    public function addStudent(Student $student)
    {
        $this->students[] = $student;
    }

    public function listStudents()
    {
        foreach ($this->students as $student) {
            echo $student->getDetails() . PHP_EOL;
        }
    }

    // Magic Method __call untuk memanggil metode yang tidak ada
    public function __call($method, $arguments)
    {
        echo "Method '$method' tidak tersedia." . PHP_EOL;
    }
}

// Penggunaan Namespace dan Class
use App\School\Student;
use App\School\StudentManager;

// Inisialisasi Data Siswa
$student1 = new Student("Yincen", 16, "S001", "a");
$student2 = new Student("Andi", 15, "S002", "b");

// Pengelolaan Data Siswa
$manager = new StudentManager();
$manager->addStudent($student1);
$manager->addStudent($student2);

// Menampilkan Daftar Siswa
$manager->listStudents();

// Memanggil magic method __call
$manager->nonexistentMethod();
?>
