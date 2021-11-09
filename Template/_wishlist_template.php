<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    if(isset($_POST['delete-cart-submit']))
    {
      $deletedrecord = $Wishlist->deleteWishlist($_POST['item_id']);
    }

    if(isset($_POST['cart-submit'])){
      $Cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
    }

  }
?>

<!-- Shpping cart section start -->
<section id="cart" class="py-3">
        <div class="container-fluid w-75%">
          <h5 class="font-baloo font-size-20">Wishlist</h5>

          <!-- shopping cart items start -->
          <div class="row">
            <div class="col-sm-9">
              <?php
                foreach ($product->getData('wishlist') as $item):
                  $cart = $product->getProduct($item['item_id']);
                  $subTotal[] = array_map(function($item){
              ?>
              <!-- cart item start -->
              <div class="row border-top py-3 mt-3">
                <div class="col-sm-2">
                  <img
                    src="<?php echo $item['item_image'] ?? "../images/products/Air Jordan 12 Retro Flint.png"; ?>"
                    alt="Jordan 13"
                    class="img-fluid"
                  />
                </div>
                <div class="col-sm-8">
                  <h5 class="font-baloo font-size-20">
                  <?php echo $item['item_name'] ?? "Unknown"; ?>
                  </h5>
                  <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                  <!-- product rating start -->
                  <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14"
                      >18,534 ratings</a
                    >
                  </div>
                  <!-- product rating end -->

                  <!-- product qty start -->
                  <div class="qty d-flex pt-2">
                
                  <form method="post">
                      <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                      <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger pl-0 pr-3 border-right">Delete</button>
                  </form>

                    <form method ="post">
                      <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                      <button type="submit" name="cart-submit" class="btn font-baloo text-danger">
                      Add to Cart
                    </button>
                    </form>
                    
                  </div>
                  <!-- product qty end -->
                </div>

                <div class="col-sm-2 text-end">
                  <div class="font-size-20 text-danger font-baloo">
                    R<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
                  </div>
                </div>
              </div>
              <!-- cart item end -->
              <?php
                    return $item['item_price'];
                }, $cart); // closing array_map function
                endforeach;
              ?>
            </div>
          </div>
          <!-- shopping cart items end -->
        </div>
      </section>
      <!-- Shopping cart section end -->