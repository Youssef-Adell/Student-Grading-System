<h1 class="mb-5 fs-2"><?php echo $pageName ?></h1>
<a href="addStudent.php" class="btn btn-success w-25 mb-4 ms-3">Add Student</a>

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Student Name</th>
            <th scope="col">ID</th>
            <th scope="col">Department</th>
            <th scope="col">Year</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $cnt = 1; ?>
        <?php foreach ($data as $student) { ?>
            <tr>
                <th scope="row"><?php echo $cnt++ ?></th>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['id'] ?></td>
                <td><?php echo $student['department'] ?></td>
                <td><?php echo $student['year'] ?></td>
                <td>
                    <form action="editStudent.php" style="display:inline;">
                        <input name="id" type="hidden" value="<?php echo $student['id'] ?>" ?>
                        <input name="name" type="hidden" value="<?php echo $student['name'] ?>" ?>
                        <input type="submit" class="btn btn-outline-primary btn-sm me-1" value="Edit" />
                    </form>
                    <form action="removeStudent.php" style="display:inline;">
                        <input name="id" type="hidden" value="<?php echo $student['id'] ?>" ?>
                        <input type="submit" class="btn btn-outline-danger btn-sm" value="Delete" />
                    </form>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>