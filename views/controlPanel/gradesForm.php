<h1 class="mb-5 fs-2"><?php echo $pageName ?></h1>

<?php if ($alert) { ?>
    <div class="alert alert-danger w-75 mx-auto"><?php echo $alert ?></div>
<?php } ?>

<form method="post">
    <div class="mb-3">
        <input name="student_id" type="text" class="form-control" placeholder="Enter Student ID">
    </div>
    <?php for ($i = 1; $i <= 4; $i++) { ?>
        <select name="course<?php echo $i ?>" class="form-select mb-3">
            <option value="F" selected>Select Grade of Course #<?php echo $i ?></option>
            <option value="D">D</option>
            <option value="M">M</option>
            <option value="P">P</option>
            <option value="F">F</option>
        </select>
    <?php } ?>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>