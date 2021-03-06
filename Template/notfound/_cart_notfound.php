<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    if(isset($_POST['delete-cart-submit']))
    {
      $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }

    // save for later
    if(isset($_POST['whishlist-submit'])){
      $Cart->saveForLater($_POST['item_id']);
    }
  }
?>

<!-- Shpping cart section start -->
<section id="cart" class="py-3">
        <div class="container-fluid w-75%">
          <h5 class="font-baloo font-size-20">Shopping Cart</h5>

          <!-- shopping cart items start -->
          <div class="row border-top py-3 mt-3">
            <div class="col-sm-9">
            <!-- Empty Cart start -->
                <div class="col-sm-12 text-center py-2">
                    <img src="./images/blog/empty_cart1.png" alt="Empty Cart" class="img-fluid">
                    <p class="font-baloo font-size-16 text-black-50">Empty Cart</p>
                </div>
            <!-- Empty Cart end -->
            </div>

            <!-- Subtotal section start -->
            <div class="col-sm-3">
              <div class="sub-total border text-center mt-2">
                <h6 class="font-size-12 font-rale text-success py-3">
                  <i class="fas fa-check"></i> You've got free Delivery
                </h6>
                <div class="border-top py-4">
                  <h5 class="font-baloo font-size-20">
                    Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp;<span class="text-danger"
                      >R
                      <span class="text-danger" id="deal-price"
                        ><?php echo isset($subTotal) ? $Cart->getSum($subTotal): 0; ?></span
                      ></span
                    >
                  </h5>
                  <button type="submit" class="btn btn-warning mt-5">
                    Proceed to Buy
                  </button>
                </div>
              </div>
            </div>
            <!-- Subtotal section end -->
          </div>
          <!-- shopping cart items end -->
        </div>
      </section>
      <!-- Shopping cart section end -->