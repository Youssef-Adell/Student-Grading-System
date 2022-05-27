    <h1 class="mb-5 fs-2"><?php echo $pageName ?></h1>
    <a href="addGrade.php" class="btn btn-success w-25 mb-4 ms-3">Add Grade</a>

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sudent ID</th>
                <th scope="col">Sudent Name</th>
                <th scope="col">Course #1</th>
                <th scope="col">Course #2</th>
                <th scope="col">Course #3</th>
                <th scope="col">Course #4</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $cnt = 1; ?>
            <?php foreach ($data as $grade) { ?>
                <tr>
                    <th scope="row"><?php echo $cnt++ ?></th>
                    <td><?php echo $grade['student_id']; ?></td>
                    <td><?php echo $grade['name']; ?></td>
                    <td><?php echo $grade['course1'] ?></td>
                    <td><?php echo $grade['course2'] ?></td>
                    <td><?php echo $grade['course3'] ?></td>
                    <td><?php echo $grade['course4'] ?></td>
                    <td>
                        <form action="removeGrade.php" method="get" style="display:inline;">
                            <input name="id" type="hidden" value="<?php echo $grade['grade_id'] ?>" ?>
                            <input type="submit" class="btn btn-outline-danger btn-sm" value="Delete" />
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>