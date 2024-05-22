<?php include '../includes/nav.php'; ?>
<div class="row">
    <h1>Update Shopkeeper</h1><hr class="col-2">
</div>
<div class="row">
    <div class="container">
    <?php
        include '../includes/connection.php';
        $sql=mysqli_query($conn,"SELECT * FROM shopkeeper WHERE shopkeeperid='$_GET[upd]'");
        $r=mysqli_fetch_array($sql);
        ?>
    <form action="" method="post" class="my-5 container p-3 bg-light rounded" style="width: 40%;border: 1px solid green;">
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="text" name="username" value="<?php echo $r['username'] ?>" placeholder="" id="" class="form-control" >
                    <label for="floatingInputGroup2">Username</label>
                </div>
            </div>
            <div class="input-group my-2">
                <div class="form-floating">
                    <input type="text" name="password" value="<?php echo $r['password'] ?>" placeholder="" id="" class="form-control" >
                    <label for="floatingInputGroup2">Password</label>
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
    $name=$_POST['username'];
    $password=$_POST['password'];

    $sql="UPDATE shopkeeper SET username='$name',password='$password' WHERE shopkeeperid='$_GET[upd]'";
    $query=mysqli_query($conn,"$sql");

    if($query){
        header('location: shopkeeper.php');
    }else{
        header('location: shopkeeper.php');
    }
}
?>