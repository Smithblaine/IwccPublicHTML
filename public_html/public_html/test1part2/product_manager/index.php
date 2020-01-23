<?php
require('../model/database.php');
require('../model/student_db.php');
require('../model/courses_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_courses';
    }
}

if ($action == 'list_courses') {
    $courseID = filter_input(INPUT_GET, 'course_id', FILTER_VALIDATE_INT);
    if ($courseID == NULL || $courseID == FALSE) {
        $courseID = 1;
    }
    $course_name = get_course_name($courseID);
    $courses = get_courses();
    $students = get_student_by_course($courseID);
    include('student_list.php');
} else if ($action == 'delete_student') {
    $student_id = filter_input(INPUT_POST, 'studentID',
            FILTER_VALIDATE_INT);
    $courseID = filter_input(INPUT_POST, 'courseID',
            FILTER_VALIDATE_INT);
    if ($courseID == NULL || $courseID == FALSE ||
            $student_id == NULL || $student_id == FALSE) {
        $error = "Missing or incorrect product id or category id.";
        include('../errors/error.php');
    } else { 
        delete_student($student_id, $courseID);
        header("Location: .?course_id=$courseID");
    }
} else if ($action == 'show_add_form') {
    $courses = get_courses();
    include('product_add.php');    
} else if ($action == 'add_student') {
    $courseID = filter_input(INPUT_POST, 'course_id',
            FILTER_VALIDATE_INT);
    $name = filter_input(INPUT_POST, 'name');
    if ($courseID == NULL || $courseID == FALSE ||
            $name == NULL) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else { 
        add_student($courseID, $name);
        header("Location: .?course_id=$courseID");
    }
} else if ($action == 'list_categories') {
    $courses = get_courses();
    include('category_list.php');
} else if ($action == 'update_students') {
    $students = get_students();
    include('update_student_list.php');
} else if ($action == 'update_student') {
    $courseID = filter_input(INPUT_POST, 'course_id',
        FILTER_VALIDATE_INT);
    $name = filter_input(INPUT_POST, 'name');
    if ($courseID == NULL || $courseID == FALSE ||
        $name == NULL) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        update_student($student_id, $name);
        header("Location: .?course_id=$courseID");
    }
} else if ($action == 'add_course') {
    $name = filter_input(INPUT_POST, 'name');

    if ($name == NULL) {
        $error = "Invalid category name. Check name and try again.";
        include('../errors/error.php');
    } else {
        add_course($name);
        header('Location: .?action=list_categories'); 
    }
} else if ($action == 'delete_course') {
    $courseID = filter_input(INPUT_POST, 'courseID',
            FILTER_VALIDATE_INT);
    delete_course($courseID);
    header('Location: .?action=list_categories');      
}
?>