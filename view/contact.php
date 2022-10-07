<?php
include "header.php";
?>

    <div class="container pt-2">
        <h1 class="text-center" >Contact Us</h1>
        <div class="alert" id="alertmsg" role="alert" style="display: none">
            Form inserted successfully!!
        </div>
        <span><?php if(isset($errors['message'])){echo $errors['message'];} ?></span>
        <form action="functions.php" method="post" id="contactForm" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" placeholder="Name" id="name" class="form-control" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>">
                <span class="text-danger error-msg"> <?php if(isset($errors['name'])){echo $errors['name'];} ?> </span>
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="email form-control" id="email" placeholder="Email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>">
                <span class="text-danger error-msg"> <?php if(isset($errors['email'])){echo $errors['email'];} ?> </span>
            </div>
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <input type="radio" class="gender" name="gender" id="gender" value="Male" >Male
                <input type="radio" class="gender" name="gender" id="gender" value="Female" >Female
                <input type="radio" class="gender" name="gender" id="gender" value="other">other <br>
                <span class="text-danger error-msg"> <?php if(isset($errors['gender'])){echo $errors['gender'];} ?> </span>
            </div>
            <div class="mb-3">
                <label class="form-label">Date of Birth</label>
                <input type="date" name="dob" id="dob" value="<?php if(isset($_POST['dob'])){echo $_POST['dob'];} ?>"> <br>
                <span class="text-danger error-msg"> <?php if(isset($errors['dob'])){echo $errors['dob'];} ?> </span>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="image1" name="image1" accept="image/*" value="">
                <span class="text-danger error-msg"><?php if(isset($errors['image1'])){echo $errors['image1'];} ?> </span>
            </div>
            <div class="mb-3">
                <label class="form-label">Query</label>
                <textarea class="form-control" name="query" id="query" rows="3" placeholder="Enter your query here..."><?php if(isset($_POST['query'])){echo $_POST['query'];} ?></textarea>
                <span class="text-danger error-msg"> <?php if(isset($errors['query'])){echo $errors['query'];} ?> </span>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="tc" id="tc" type="checkbox" value="">
                <label class="form-check-label">terms & conditions</label><br>
                <span class="text-danger error-msg"> <?php if(isset($errors['tc'])){echo $errors['tc'];} ?> </span>
            </div>
            <div class="text-center">
                <button type="submit" name="contactForm"  class=" btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

<?php
include "footer.php";