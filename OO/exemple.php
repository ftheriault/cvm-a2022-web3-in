<?php
    require_once("User.php");
    require_once("Student.php");
    
    $user = new User("John", "Smith");
    $student = new Student("Foo", "Bar", "A2022");

    $users = [];
    $users[] = $user;
    $users[] = $student;

    foreach ($users as $tmp) {
        echo $tmp->getName();
    }