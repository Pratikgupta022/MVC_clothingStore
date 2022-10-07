<?php
include "view/header.php";
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="container mt-5">
        <h1 class="text-center">Edit Page</h1>
        <div class="alert" id="alertmsg" role="alert" style="display: none"> </div>
        <form action="http://localhost/ClothingStore/index.php?action=edituser" id="edit" method="post">
            <div class="mt-3 mb-3">
                <label class="form-label">Name</label>
                <input type="text" id="name" class="form-control" value="<?php echo $data['name'] ?>" name="name" placeholder="Name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" value="<?php echo $data['email'] ?>" name="email" placeholder="Email">
            </div>
            <div class="mt-3 mb-3">
                <label class="form-label">Type</label>
                <input type="text" class="form-control" value="<?php echo $data['type'] ?>" name="type" placeholder="Type">
            </div>
            <div class="text-center">
                <button type="submit" id="registerForm" name="registerForm"  class=" btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

<!--    <script src="view/js/register.js"></script>-->
<?php
include "view/footer.php";
