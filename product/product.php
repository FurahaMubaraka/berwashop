<?php include '../includes/nav.php'; ?>
<div class="row">
    <h1>Product</h1><hr class="col-2">
</div>
<div class="my-5">
    <a href="adding.php"><button class="btn btn-outline-success col-2">Add</button></a>
</div>
<div class="row my-5">
    <table class="table border">
        <thead >
            <tr class="bg-secondary">
                <th>Id</th>
                <th>Product Code</th>
                <th>Product Name</th>
                <th colspan="2" class="text-center col-2">Action</th>
            </tr>
        </thead>
        <?php
        include '../includes/connection.php';
        $sql=mysqli_query($conn,"SELECT * FROM product");
        $c=1;
        while($r=mysqli_fetch_array($sql)){
        ?>
        <tbody>
            <tr>
                <td><?php echo $c++ ?></td>
                <td><?php echo $r['productcode'] ?></td>
                <td><?php echo $r['productname'] ?></td>
                <td><a href="update.php?upd=<?php echo $r['productcode'] ?>"><button class="btn btn-success">Edit</button></a></td>
                <td><a href="delete.php?dlt=<?php echo $r['productcode'] ?>"><button class="btn btn-danger">delete</button></a></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</div>
<?php include '../includes/footer.php'; ?>
