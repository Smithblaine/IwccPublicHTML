<?php include 'view/header.php'; ?>
<main>
    <aside>
        <h1>Courses</h1>
        <nav>
            <ul>
                <?php foreach($courses as $course) : ?>
                    <li>
                        <a href="?course_id=<?php
                        echo $course['courseID']; ?>">
                            <?php echo $course['courseName']; ?>
                        </a>
                        <br>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </aside>
    <section>
        <h1><?php echo $course_name; ?></h1>
        <ul class="nav">
            <!-- display links for students in selected category -->
            <?php foreach ($students as $student) : ?>
                <li>
                    <a href="?action=view_product&amp;product_id=<?php
                                echo $student['studentID']; ?>">
                        <?php echo $student['studentName']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>
<?php include 'view/footer.php'; ?>