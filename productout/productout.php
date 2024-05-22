<?php include '../includes/nav.php'; ?>
<div class="row">
    <h1>Product Out</h1><hr class="col-2">
</div>
<div class="my-5">
    <a href="adding.php"><button class="btn btn-outline-success col-2">Remove</button></a>
</div>
<div class="row my-5">
    <table class="table border">
        <thead >
            <tr class="bg-secondary">
                <th>Id</th>
                <th>Product Code</th>
                <th>Date</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Total price</th>
                <th colspan="2" class="text-center col-2">Action</th>
            </tr>
        </thead>
        <?php
        include '../includes/connection.php';
        $sql=mysqli_query($conn,"SELECT * FROM productout");
        $c=1;
        while($r=mysqli_fetch_array($sql)){
        ?>
        <tbody>
            <tr>
                <td><?php echo $c++ ?></td>
                <td><?php echo $r['productcode'] ?></td>
                <td><?php echo $r['date'] ?></td>
                <td><?php echo $r['quantity'] ?></td>
                <td><?php echo $r['uniqueprice'] ?></td>
                <td><?php echo $r['totalprice'] ?></td>
                <td><a href="update.php?upd=<?php echo $r['uniqueprice'] ?>"><button class="btn btn-success">Edit</button></a></td>
                <td><a href="delete.php?dlt=<?php echo $r['uniqueprice'] ?>"><button class="btn btn-danger">delete</button></a></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</div>
<?php include '../includes/footer.php'; ?>
