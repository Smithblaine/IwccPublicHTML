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
