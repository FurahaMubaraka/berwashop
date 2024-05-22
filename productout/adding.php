<?php include '../includes/nav.php'; ?>
<div class="row">
    <h1>Product Out stock</h1><hr class="col-2">
</div>
<div class="row">
    <div class="container">
    <form action="" method="post" class="my-5 container p-3 bg-light rounded" style="width: 40%;border: 1px solid green;">
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="int" name="prdctcode" placeholder="" id="" class="form-control" >
                    <label for="floatingInputGroup2">Product Code</label>
                </div>
            </div>
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="int" name="quantity" placeholder="" id="" class="form-control" >
                    <label for="floatingInputGroup2">Quantity</label>
                </div>
            </div>
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="number" name="price" placeholder="" id="" class="form-control" >
                    <label for="floatingInputGroup2">Unit price</label>
                </div>
            </div>
            <button class="btn btn-outline-success col-12 p-2" name="submit">Out</button>
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

    $sql="INSERT INTO productout(productcode,quantity,uniqueprice,totalprice) VALUES('$prdctcode','$quantity','$price','$totalprice')";
    $query=mysqli_query($conn,"$sql");

    if($query){
        header('location: productout.php');
    }else{
        header('location: productout.php');
    }
}
?>