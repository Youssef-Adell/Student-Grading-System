<h1 class="mb-5 fs-2"><?php echo $pageName ?></h1>
<form method="post">
    <div class="mb-3">
        <input name="name" type="text" class="form-control" placeholder="Enter Student Name" value="<?php echo $oldName ?>">
    </div>
    <select name="department" class="form-select mb-3">
        <option selected>Select Department</option>
        <option value="Information Technology">Information Technology</option>
        <option value="Mechatronics">Mechatronics</option>
        <option value="Autotronics">Autotronics</option>
        <option value="Renewable Energy">Renewable Energy</option>
    </select>
    <select name="year" class="form-select mb-4">
        <option selected>Select Year</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="3">4</option>
    </select>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>