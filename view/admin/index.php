<?php
include "view/header.php";
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="container mt-4">
    <h1 class="text-center "><a href="http://localhost/ClothingStore/index.php?action=admin&sort=0">
            <img src="view/images/up-arrow.png" height="30px" width="30px" alt="sort icon"></a>
        Admin Page
        <a href="http://localhost/ClothingStore/index.php?action=admin&sort=1">
            <img src="view/images/down-arrow.png" height="30px" width="30px" alt="sort icon"></a> -
        <a href="http://localhost/ClothingStore/index.php?action=register" class="btn btn-sm btn-info">Add New User</a>
    </h1>
    <div class="form mt-4">
        <form action="http://localhost/ClothingStore/index.php?action=admin">
            <select id="column" name="column" style="border: none; outline: 0">
                <option selected>Select column to search</option>
                <option value="name">Name</option>
                <option value="email">Email</option>
                <option value="type">Type</option>
            </select>
            <input  type="text" id="search" name="search" placeholder="Search" >
            <div id="display"></div>
<!--                <button class="btn btn-primary" name="searchbtn" type="submit">Search</button>-->
        </form>
    </div>
    <div class="list-data mt-5">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#<a href="#" class="text-decoration-none"></a></th>
                <th scope="col"><a href="http://localhost/ClothingStore/index.php?action=admin&sort=name" class="text-decoration-none">Name</a></th>
                <th scope="col"><a href="http://localhost/ClothingStore/index.php?action=admin&sort=email" class="text-decoration-none">Email</a></th>
                <th scope="col"><a href="http://localhost/ClothingStore/index.php?action=admin&sort=type" class="text-decoration-none">type</a></th>
                <th scope="col"><a href="#" class="text-decoration-none">Edit</a></th>
                <th scope="col"><a href="#" class="text-decoration-none">Delete</a></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $count = 1;
//            print_r($data); die;
                foreach ($data as $row){
                    ?>
            <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['type'] ?></td>
                    <td><a href="http://localhost/ClothingStore/index.php?action=edituser&id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a></td>
                    <td><a href="http://localhost/ClothingStore/index.php?action=deleteuser&id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">Delete</a></td>
            </tr>
                    <?php
                    $count++;
                }
            ?>
            </tbody>
        </table>
    </div>
</div>
<?php

?>
    <div class="footer fixed-bottom" style="display: flex; justify-content: center;">
        <nav aria-label="...">
            <ul class="pagination ">
                <li class="page-item <?php if ($page==1){echo "disabled";} ?>">
                    <a class="page-link" href="index.php?action=admin&page=<?php echo $page-1; ?>" tabindex="-1">Previous</a>
                </li>
                <?php
                    for ($i=1;$i<$total_pages;$i++){
                        echo "<li class='page-item'><a class='page-link' href='index.php?action=admin&page=".$i."'>".$i."</a></li>";
                    ?>
                        <?php
                        }
                ?>
                <li class="page-item <?php if ($page==$total_pages){echo "disabled";} ?>">
                    <a class="page-link" href="index.php?action=admin&page=<?php echo $total_pages; ?>">End</a>
                </li>
            </ul>
        </nav>
    </div>

    <script src="view/js/adminSearch.js"></script>
<?php
include "view/footer.php";
