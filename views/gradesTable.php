    <h1 class="mb-5 fs-2"><?php echo $pageName ?></h1>

    <form method="POST">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="search" value="<?php echo $search ?>">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </div>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && $data) { ?>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tr>
                <td>Course #1</td>
                <td><?php echo $data['course1'] ?></td>
            </tr>
            <tr>
                <td>Course #2</td>
                <td><?php echo $data['course2'] ?></td>
            </tr>
            <tr>
                <td>Course #3</td>
                <td><?php echo $data['course3'] ?></td>
            </tr>
            <tr>
                <td>Course #4</td>
                <td><?php echo $data['course4'] ?></td>
            </tr>
            <tr class="stud-info">
                <th>Student ID</th>
                <td><?php echo $data['id'] ?></td>
            </tr>
            <tr class="stud-info">
                <th>Student Name</th>
                <td><?php echo $data['name'] ?></td>
            </tr>
            <tr class="stud-info">
                <th>Department</th>
                <td><?php echo $data['department'] ?></td>
            </tr>
            <tr class="stud-info">
                <th>Year</th>
                <td><?php echo $data['year'] ?></td>
            </tr>
        </table>

    <?php } ?>