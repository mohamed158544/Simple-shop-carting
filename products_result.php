<?php 

$Tshirt_price = 30.9 ;
$Tshirt_weight = 200 ; 
$Tshirt_rate = 2 ; 

$blouse_price = 10.99 ;
$blouse_weight = 300 ; 
$blouse_rate = 3 ; 

$pants_price = 64.99 ;
$pants_weight = 900 ; 
$pants_rate = 3 ; 

$shoes_price = 79.99 ;
$shoes_weight = 1300 ; 
$shoes_rate = 2 ; 

$jackets_price = 199.99 ;
$jakcets_weight = 2200 ; 
$jackets_rate = 2 ; 

$sweatpants_price = 84.99 ;
$sweatpants_weight = 1100 ; 
$sweatpnats_rate = 2 ; 

$vat = 0.14 ;



$Tshirt = $_POST ['Tshirt']; 
$blouse = $_POST['blouse']; 
$pants = $_POST ['pants'] ;
$shoes = $_POST ['shoes'] ;
$jackets = $_POST ['jackets'];
$sweapants = $_POST ['sweatpants'];

$number_of_products =  ($Tshirt + $blouse + $pants + $shoes + $jackets + $sweapants) ;

$subtotal = (($Tshirt_price * $Tshirt) + ($blouse_price * $blouse) + ($pants_price * $pants) + ($shoes_price * $shoes) + ($jackets_price * $jackets) + ($sweatpants_price * $sweapants) );

$Shipping =((($Tshirt_weight * $Tshirt * $Tshirt_rate)/100) + (($blouse_weight * $blouse_rate * $blouse)/100) + (($pants_weight * $pants_rate * $pants)/100) + (($shoes_weight * $shoes_rate * $shoes)/100) + (($jakcets_weight * $jackets_rate * $jackets)/100) + (($sweatpants_weight * $sweatpnats_rate * $sweapants)/100) ) ; 

$VAT = $vat * $subtotal ; 

$discounts_on_shoes =  ( 0.1 * $shoes * $shoes_price) ; 


if ( $number_of_products > 2 ) 
{
        $discounts_on_jackets = ( 0.5 * $jackets_price * $jackets) ;

}elseif ( $number_of_products < "2" ){

    $discounts_on_jackets = 0 ;
}


if ( $number_of_products >= "2") 
{
        $discounts_on_shipping = 10 ;
}else {
    $discounts_on_shipping = 0 ;
}
   
$total = ($VAT + $subtotal + $Shipping - $discounts_on_shoes - $discounts_on_jackets - $discounts_on_shipping);  

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products_result</title>
    <link rel="stylesheet" href="\task\css\normalize.css">
    <link rel="stylesheet" href="\task\css\style5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>



    <section class="slider">
        <div class="col-25">
            <div class="cart">
                <h4> Your Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>
                            <?php echo $number_of_products; ?> </b></span></h4>
                <p class=>
                    <?php
      if ($Tshirt > '0')
      {
          echo $Tshirt , "    " ,'T-shirt' ;
      }
      else{
          echo "" ;
      }
      ?>
                </p>
                <p>
                    <?php
     if ($blouse > '0')
     {
         echo $blouse , "    " ,'blouse' ;
     }
     else{
         echo "" ;
     }
    ?>
                </p>
                <p>
                    <?php
          
      if ($pants > '0')
      {
          echo $pants  , "    " ,'pant' ;
      }
      else{
          echo "" ;
      }
          ?>
                </p>

                <p>
                    <?php
           if ($shoes > '0')
           {
               echo $shoes , "    " ,'shoes' ;
           }
           else{
               echo "" ;
           }
          ?>
                </p>

                <p>
                    <?php
           if ($jackets > '0')
           {
               echo $jackets , "    " ,'jacket' ;
           }
           else{
               echo "" ;
           }
          ?>
                </p>

                <p>
                    <?php
           if ($sweapants > '0')
           {
               echo $sweapants , "    " ,'sweatpant' ;
           }
           else{
               echo "" ;
           }
     
          ?>
                </p>




                <h3><a> Subtotal </a> <span class="price"> <?php echo $subtotal ?> $ </span></h3>
                <h3><a> Shipping </a> <span class="price"> <?php echo $Shipping ?> $ </span></h3>
                <h3><a> VAT </a> <span class="price"> <?php echo $VAT ?> $ </span></h3>
                <h3><a> Discounts: </a> </h3>
                <ul>
                    <li>
                        10% off shoes : -$ <?php echo $discounts_on_shoes ?>
                    </li>
                    <li>
                        50% off jackets : -$ <?php echo $discounts_on_jackets ?>
                    </li>
                    <li>
                        $10 off shipping : -$ <?php echo $discounts_on_shipping ?>
                    </li>
                </ul>



                <hr>
                <h3>Total <span class="price" style="color:black"><b> <?php echo $total ?> $ </b></span></h3>
            </div>
        </div>
        </div>
    </section>

    <!-- end the cart -->

</body>

</html>