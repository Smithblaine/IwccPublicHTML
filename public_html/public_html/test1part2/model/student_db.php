<?php
function get_student_by_course($courseID) {
    global $db;
    $query = 'SELECT * FROM studentTable
              WHERE courseID = :courseID
              ORDER BY courseID';
    $statement = $db->prepare($query);
    $statement->bindValue(':courseID', $courseID);
    $statement->execute();
    $students = $statement->fetchAll();
    $statement->closeCursor();
    return $students;
}

function get_student($student_id) {
    global $db;
    $query = 'SELECT * FROM studentTable
              WHERE studentID = :student';
    $statement = $db->prepare($query);
    $statement->bindValue(':studentID', $student_id);
    $statement->execute();
    $student = $statement->fetch();
    $statement->closeCursor();
    return $student;
}

function delete_student($student_id, $courseID) {
    global $db;
    $query = 'DELETE FROM studentTable
              WHERE studentID = :studentID AND courseID = :courseID';
    $statement = $db->prepare($query);
    $statement->bindValue(':studentID', $student_id);
    $statement->bindValue(':courseID', $courseID);
    $statement->execute();
    $statement->closeCursor();
}

function add_student($courseID, $name) {
    global $db;
    $query = 'INSERT INTO studentTable
                 (studentName, courseID)
              VALUES
                 (:name, :courseID )';
    $statement = $db->prepare($query);
    $statement->bindValue(':courseID', $courseID);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();
}

function update_student($student_id,$name) {
    global $db;
    $query = 'UPDATE studentTable
              SET studentName = :studentName
              WHERE studentID = :studentID';
    $statement = $db->prepare($query);
    $statement->bindValue(':studentID', $student_id);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();
}

function get_students() {
    global $db;
    $query = 'SELECT * FROM studentTable
              ORDER BY studentID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}
?>