<?php include '../includes/nav.php'; ?>
<div class="row">
    <h1>Shopkeeper</h1><hr class="col-2">
</div>
<div class="my-5">
    <a href="../login/index.php"><button class="btn btn-outline-success col-2">Add</button></a>
</div>
<div class="row my-5">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr class="bg-secondary">
                <th>Id</th>
                <th >Username</th>
                <th>Password</th>
                <th colspan="2" class="text-center col-2">Action</th>
            </tr>
        </thead>
        <?php
        include '../includes/connection.php';
        $sql=mysqli_query($conn,"SELECT * FROM shopkeeper");
        $c=1;
        while($r=mysqli_fetch_array($sql)){
        ?>
        <tbody>
            <tr>
                <td><?php echo $c++ ?></td>
                <td><?php echo $r['username'] ?></td>
                <td><?php echo $r['password'] ?></td>
                <td><a href="update.php?upd=<?php echo $r['shopkeeperid'] ?>"><button class="btn btn-success">Edit</button></a></td>
                <td><a href="delete.php?dlt=<?php echo $r['shopkeeperid'] ?>"><button class="btn btn-danger">delete</button></a></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</div>
<?php include '../includes/footer.php'; ?>
