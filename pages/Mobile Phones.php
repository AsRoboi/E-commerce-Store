<!--import Vertical_navbar-->
<div class="container marketing">

    <!-- START THE FEATURETTES -->


    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Easy Browsing of products <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">You will not find a better place</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="/resources/images/Default_Carousel/sample.jpg" width="500" height="300" class="d-block w-100" alt="Image not loaded">


        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

</div>

<br>
<!--Products-->
<div class="container">
<div id='product_cards' class="container">
    <?php

    $product_counter = 0;
    $sql = 'SELECT id, pname, brand, price, discount, descr, filename FROM tbl_products WHERE category = "Mobile Phones"';
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($product_counter == 0) {
                echo "<div class='row'>";
            } elseif (($product_counter % 4) == 0) {
                echo "<br><p><hr></p><br></div><div class='row'>";
            } else {
            }
            $product_counter++;
            //Card Begin
            echo '<div class="col-md-3">';
            echo '    <div class="card" style="width: 18rem;">';
            echo '    <img src="/resources/products/' . $row['filename'] . '" class="card-img-top" style="height:35px width=35px ;" alt="...">';
            echo '    <div class="card-body">';
            echo '      <h5 class="card-title"> ' . $row['pname'] . '</h5>';
            echo '  <p class="card-text">Product Id: ' . $row['id'] . '</p>';
            echo '  <p class="card-text">Description: ' . $row['descr'] . '.</p>';
            echo '</div> <ul class="list-group list-group-flush">';
            echo '<li class="list-group-item">Price: Rs. ' . $row['price'] . '</li>';
            echo '<li class="list-group-item">Brand: ' . $row['brand'] . '</li>';
            echo '<li class="list-group-item">Discount: ' . $row['discount'] . '%</li>';
            echo ' </ul><div class="card-body">';
            //echo '<a href="" class="btn btn-warning">View details</a>';
            echo '<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#_modal_cart">Add to Cart</button>';;
            echo ' </div></div></div>';
            //card end
        }
    }
    echo "<br><p></p><br></div>";
    ?>
</div>
<!-- Products End -->