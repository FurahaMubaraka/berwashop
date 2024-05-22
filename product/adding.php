<?php include '../includes/nav.php'; ?>
<div class="row">
    <h1>add Shopkeeper</h1><hr class="col-2">
</div>
<div class="row">
    <div class="container">
    <form action="" method="post" class="my-5 container p-3 bg-light rounded" style="width: 40%;border: 1px solid green;">
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="text" name="prdctcode" placeholder="" id="" class="form-control" >
                    <label for="floatingInputGroup2">Product Code</label>
                </div>
            </div>
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="text" name="prdctname" placeholder="" id="" class="form-control" >
                    <label for="floatingInputGroup2">Product Name</label>
                </div>
            </div>
            <button class="btn btn-outline-success col-12 p-2" name="submit">Add</button>
        </form>
    </div>
</div>
<?php include '../includes/footer.php'; ?>

<?php
include '../includes/connection.php';
if(isset($_POST['submit'])){
    $prdctcode=$_POST['prdctcode'];
    $prdctname=$_POST['prdctname'];

    $sql="INSERT INTO product VALUES('$prdctcode','$prdctname')";
    $query=mysqli_query($conn,"$sql");

    if($query){
        header('location: product.php');
    }else{
        header('location: product.php');
    }
}
?>