<?php
include "view/header.php";
?>

    <div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" >
                <div class="carousel-item active">
                    <img src="view/images/home-clothes.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="view/images/h-clothes2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="view/images/h-clothes3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="">
    <!--    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">-->
    <!--        <div class="carousel-inner" style="height: 550px ">-->
    <!--            <div class="carousel-item active" data-bs-interval="10000">-->
    <!--                <img src="view/images/home-clothes.jpg" class="d-block w-100" alt="image1">-->
    <!--                <div class="carousel-caption d-none d-md-block">-->
    <!--                    <h5>Second slide label</h5>-->
    <!--                    <p>Some representative placeholder content for the second slide.</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="carousel-item" data-bs-interval="2000">-->
    <!--                <img src="view/images/h-clothes2.jpg" class="d-block w-100" alt="image2">-->
    <!--            </div>-->
    <!--            <div class="carousel-item">-->
    <!--                <img src="view/images/h-clothes3.jpg" class=" d-block w-100" alt="image3">-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">-->
    <!--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
    <!--            <span class="visually-hidden">Previous</span>-->
    <!--        </button>-->
    <!--        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">-->
    <!--            <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
    <!--            <span class="visually-hidden">Next</span>-->
    <!--        </button>-->
    <!--    </div>-->
    </div>

    <div class="women mt-5">
        <div class=" text-center ">
            <div class="row">
                <div class="col">
                    <h1 class="image-text">Women</h1>
                    <a href="contact.php"><img src="view/images/h-clothes2.jpg" class="image-relative d-block h-80 w-100" alt="image1"></a>
                </div>
                <div class="col">
                    <h1 class="image-text2">Accessories</h1>
                    <img src="view/images/h-clothes3.jpg" class="image-relative d-block h-80 w-100" alt="image1">
                </div>
            </div> <br>
            <div class="row">
                <div class="col">
                    <h1 class="image-text3">Men</h1>
                    <img src="view/images/men-jacket.jpg" class="image-relative d-block h-80 w-100" alt="image1">
                </div>
                <div class="col">
                    <h1 class="image-text4">Others</h1>
                    <img src="view/images/men-hoddie.jpg" class="image-relative d-block h-80 w-100" alt="image1">
                </div>
            </div>
        </div>
    </div>

<?php
include "footer.php";
