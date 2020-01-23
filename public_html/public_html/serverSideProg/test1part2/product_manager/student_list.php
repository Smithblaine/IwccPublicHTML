<?php include '../view/header.php'; ?>
<main>
    <h1>Student List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Courses</h2>
        <nav>
            <ul>
                <!-- display links for all categories -->
                <?php foreach($courses as $course) : ?>
                <li>
                    <a href="?course_id=<?php echo $course['courseID']; ?>">
                        <?php echo $course['courseName']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
        </ul>
        </nav>        
    </aside>

    <section>
        <!-- display a table of products -->
        <h2><?php echo $course_name; ?></h2>
        <table>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($students as $student) : ?>
            <tr>
                <td><?php echo $student['studentID']; ?></td>
                <td><?php echo $student['studentName']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_student">
                    <input type="hidden" name="studentID"
                           value="<?php echo $student['studentID']; ?>">
                    <input type="hidden" name="courseID"
                           value="<?php echo $student['courseID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add Student</a></p>
        <p><a href="?action=update_students">Update Student</a></p>
        <p><a href="?action=update_course">Update Course</a></p>
        <p class="last_paragraph"><a href="?action=list_categories">List Courses</a>
        </p>        
    </section>
</main>
<?php include '../view/footer.php'; ?>