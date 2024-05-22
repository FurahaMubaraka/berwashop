<?php include '../includes/nav.php'; ?>
<div class="row">
    <h1>Update Product In</h1><hr class="col-2">
</div>
<div class="row">
    <div class="container">
    <?php
        include '../includes/connection.php';
        $sql=mysqli_query($conn,"SELECT * FROM productin WHERE uniqueprice='$_GET[upd]'");
        $r=mysqli_fetch_array($sql);
        ?>
    <form action="" method="post" class="my-5 container p-3 bg-light rounded" style="width: 40%;border: 1px solid green;">
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="text" name="prdctcode" value="<?php echo $r['productcode'] ?>" placeholder="" id="" class="form-control" >
                    <label for="floatingInputGroup2">Product Code</label>
                </div>
            </div>
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="number" name="quantity" value="<?php echo $r['quantity'] ?>" placeholder="" id="" class="form-control" >
                    <label for="floatingInputGroup2">Quantity</label>
                </div>
            </div>
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="number" name="price" value="<?php echo $r['uniqueprice'] ?>" placeholder="" id="" class="form-control" >
                    <label for="floatingInputGroup2">Unit price</label>
                </div>
            </div>
            <button class="btn btn-outline-success col-12 p-2" name="submit">Update</button>
        </form>
    </div>
</div>
<?php include '../includes/footer.php'; ?>

<?php
include '../includes/connection.php';
if(isset($_POST['submit'])){
    $prdctcode=$_POST['prdctcode'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $totalprice=$quantity * $price;

    $sql="UPDATE productin SET productcode='$prdctcode',quantity='$quantity',uniqueprice='$price',totalprice='$totalprice' WHERE uniqueprice='$_GET[upd]'";
    $query=mysqli_query($conn,"$sql");

    if($query){
        header('location: productin.php');
    }else{
        header('location: productin.php');
    }
}
?>