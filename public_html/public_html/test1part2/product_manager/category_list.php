<?php include '../view/header.php'; ?>
<main>

    <h1>Courses</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($courses as $course) : ?>
        <tr>
            <td><?php echo $course['courseName']; ?></td>
            <td>
                <form action="index.php" method="post">
                    <input type="hidden" name="action" value="delete_course" />
                    <input type="hidden" name="courseID"
                           value="<?php echo $course['courseID']; ?>"/>
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Add Course</h2>
    <form id="add_course_form"
          action="index.php" method="post">
        <input type="hidden" name="action" value="add_course" />

        <label>Name:</label>
        <input type="text" name="name" />
        <input type="submit" value="Add"/>
    </form>

    <p><a href="index.php?action=list_courses">List Students</a></p>

</main>
<?php include '../view/footer.php'; ?>