<?php include '../view/header.php'; ?>
    <main>
        <h1>Update Student</h1>
        <form action="index.php" method="post" id="update_student">
            <input type="hidden" name="action" value="update_student">

            <label>Student:</label>
            <select name="course_id">
                <?php foreach ( $students as $student ) : ?>
                    <option value="<?php echo $student['studentID']; ?>">
                        <?php echo $student['studentName']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <br>

            <label>Name:</label>
            <input type="text" name="name" />
            <br>

            <label>&nbsp;</label>
            <input type="submit" value="Update Student" />
            <br>
        </form>
        <p class="last_paragraph">
            <a href="index.php?action=list_courses">View Student List</a>
        </p>

    </main>
<?php include '../view/footer.php'; ?>