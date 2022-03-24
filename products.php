<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cart pricing </title>
    <link rel="stylesheet" href="\task\css\bootstrap.min.css">
    <link rel="stylesheet" href="\task\css\fontawesome-all.min.css">
    <link rel="stylesheet" href="\task\css\normalize.css">
    <link rel="stylesheet" href="\task\css\style5.css">

</head>


<body>


    <!-- start nav-->
    <nav>
        <div class="logo">
            <img src="../task/img/logo.png" alt="logo">
        </div>
        <ul class="menu">
            <input type="text" placeholder="Search.." name="search">
            <li> <a href="#"> Home </a> </li>
            <li> <a href="#"> About </a> </li>
            <li> <a href="#"> Contact </a> </li>
            <li> <a href="#"> Offers </a> </li>
        </ul>

    </nav>

    <!-- end nav-->


    <!-- start offers -->

    <section class="slider">
        <div class="background">
            <div class="caption">
                <h1> AVAILABLE OFFERS !!!! </h1>
                <p> 10% off on Shoes </p>
                <p> Buy two and get 50% off on jackets </p>
                <p> buy two or more and get 10$ off on shipping </p>
            </div>
        </div>
    </section>

    <!-- end offers -->


    <!-- start products -->

    <form method="POST" action="products_result.php">


        <section class="slider">
            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="assets/img/t-shirt.jpg">
                        <img src="assets/img/t-shirt.jpg" alt="t-shirt" width="600" height="400">
                    </a>

                    <div class="desc"> T-shirts </div>
                    <div class="desc"> 30.99 $</div>

                    <label> select the number required </label>
                    <input name="Tshirt" class="form-control" type="number" min="0" value="0">
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <img src="assets/img/blouse.jpg" alt="blouse" width="600" height="400">


                    <div class="desc"> blouse </div>
                    <div class="desc"> 10.99 $</div>

                    <label> select the number required </label>
                    <input name="blouse" class="form-control" type="number" min="0" value="0">
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="assets/img/pants.jpg">
                        <img src="assets/img/pants.jpg" alt="pants" width="600" height="400">
                    </a>

                    <div class="desc"> Pants</div>
                    <div class="desc"> 64.99 $</div>

                    <label> select the number required </label>
                    <input name="pants" class="form-control" type="number" min="0" value="0">
                </div>
            </div>

        </section>



        <section class="slider">

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="assets/img/jackets.jpg">
                        <img src="assets/img/jackets.jpg" alt="jackets" width="600" height="400">
                    </a>

                    <div class="desc"> jackets </div>
                    <div class="desc"> 199.99 $</div>

                    <label> select the number required </label>
                    <input name="jackets" class="form-control" type="number" min="0" value="0">
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="assets/img/shoes.jpg">
                        <img src="assets/img/shoes.jpg" alt="shoes" width="600" height="400">
                    </a>

                    <div class="desc"> shoes </div>
                    <div class="desc"> 79.99 $</div>

                    <label> select the number required </label>
                    <input name="shoes" class="form-control" type="number" min="0" value="0">
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <img src="assets/img/sweatpants.jpg" alt="sweatpants" width="600" height="400">


                    <div class="desc"> sweatpants </div>
                    <div class="desc"> 84.99 $</div>

                    <label> select the number required </label>
                    <input name="sweatpants" class="form-control" type="number" min="0" value="0">
                </div>
            </div>
        </section>


        <section>
            <button type="submit" class="button button1">
                Done shopping
            </button>
        </section>

        <section>

            <ul class="icons">
                <li><a href="#" class="fab fa-twitter"> <span class="label">Twitter</span></a></li>
                <li><a href="#" class="fab fa-facebook"> <span class="label">Facebook</span></a></li>
                <li><a href="#" class="fab fa-instagram"> <span class="label">Instagram</span></a></li>
            </ul>
        </section>


    </form>


    <!-- end products -->


</body>

</html>