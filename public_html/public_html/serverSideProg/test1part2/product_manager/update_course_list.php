<?php include '../view/header.php'; ?>
    <main>
        <h1>Update Course</h1>
        <form action="index.php" method="post" id="update_courses">
            <input type="hidden" name="action" value="update_courses">

            <label>Course:</label>
            <select name="course_id">
                <?php foreach ( $courses as $course ) : ?>
                    <option value="<?php echo $course['courseID']; ?>">
                        <?php echo $course['courseName']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <br>

            <label>Name:</label>
            <input type="text" name="name" />
            <br>

            <label>&nbsp;</label>
            <input type="submit" value="Update Course" />
            <br>
        </form>
        <p class="last_paragraph">
            <a href="index.php?action=list_courses">View Student List</a>
        </p>

    </main>
<?php include '../view/footer.php'; ?>