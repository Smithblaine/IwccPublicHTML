<?php
function get_courses() {
    global $db;
    $query = 'SELECT * FROM courseTable
              ORDER BY courseID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_course_name($courseID) {
    global $db;
    $query = 'SELECT * FROM courseTable
              WHERE courseID = :courseID';
    $statement = $db->prepare($query);
    $statement->bindValue(':courseID', $courseID);
    $statement->execute();    
    $courses = $statement->fetch();
    $statement->closeCursor();    
    $course_name = $courses['courseName'];
    return $course_name;
}

function add_course($courseName) {
    global $db;
    $query = 'INSERT INTO courseTable (courseName)
              VALUES (:courseName)';
    $statement = $db->prepare($query);
    $statement->bindValue(':courseName', $courseName);
    $statement->execute();
    $statement->closeCursor();    
}

function delete_course($courseID) {
    global $db;
    $query = 'DELETE FROM courseTable
              WHERE courseID = :courseID';
    $statement = $db->prepare($query);
    $statement->bindValue(':courseID', $courseID);
    $statement->execute();
    $statement->closeCursor();
}

function update_course($courseID,$name) {
    global $db;
    $query = 'UPDATE courseTable
              SET courseName = :courseName
              WHERE courseID = :courseID';
    $statement = $db->prepare($query);
    $statement->bindValue(':courseID', $courseID);
    $statement->bindValue(':courseName', $name);
    $statement->execute();
    $statement->closeCursor();
}
?>