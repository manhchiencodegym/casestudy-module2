<div class="">
    <div class="btn btn-primary">
        <a class="btn btn-primary" href="./index.php?page=add-subject">ADD NEW SUBJECT</a>
    </div>
    <form class="form-inline my-2 my-lg-0" action="./index.php?page=search-subject" method="post">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <table class="table mt-3 table-hover">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Id</th>
            <th>Subject</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php foreach ($subjects as $key => $subject): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $subject->getId() ?></td>
                <td><?php echo $subject->getName() ?></td>
                <td><?php echo $subject->getDescription() ?></td>
                <td>
                    <a class="btn btn-outline-danger delete text-decoration-none" href="#">Delete</a>
                    <a class="btn btn-outline-danger update text-decoration-none" href="./index.php?page=edit-subject&id=<?php echo $subject->getId() ?>">Update</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>