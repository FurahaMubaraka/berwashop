<?php include '../includes/nav.php'; ?>
<div class="row">
    <h1>Update Shopkeeper</h1><hr class="col-2">
</div>
<div class="row">
    <div class="container">
    <?php
        include '../includes/connection.php';
        $sql=mysqli_query($conn,"SELECT * FROM product WHERE productcode='$_GET[upd]'");
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
                    <input type="text" name="prdctname" value="<?php echo $r['productname'] ?>" placeholder="" id="" class="form-control" >
                    <label for="floatingInputGroup2">Product Name</label>
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
    $prdctname=$_POST['prdctname'];

    $sql="UPDATE product SET productcode='$prdctcode',productname='$prdctname' WHERE productcode='$_GET[upd]'";
    $query=mysqli_query($conn,"$sql");

    if($query){
        header('location: product.php');
    }else{
        header('location: product.php');
    }
}
?>