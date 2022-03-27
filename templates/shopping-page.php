<?php
/**
 * Template Name: Shopping Page */
get_header('shopping');
remove_action('wp_head', '_admin_bar_bump_cb');
?>

<?php 
  function console_log( $dataToLog ){
    echo '<script>';
    echo 'console.log('. json_encode( $dataToLog ) .')';
    echo '</script>';
  }

  $enqueue = 'enqueued';
  if (wp_style_is( 'bootstrapCSS', $enqueue )) {
      console_log('BootstrapCSS was enqueued');
  } else {
    console_log("BootstrapCSS was NOT enqueued");
  }
?>

<header>
    <div class="container-fluid px-0 shopping-nav-container px-xl-5">
      <nav class="navbar navbar-expand-md navbar-light pt-1 pb-3 pt-md-3 pb-md-0 mb-xxl-5 mx-md-5 px-xl-5 justify-content-md-start shopping-nav">
        <div class="d-inline-flex me-lg-auto">
          <button class="navbar-toggler shopping-nav-toggle ms-2 me-1 pt-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#shoppingSupportedContent" aria-controls="shoppingSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg width="16" height="15" xmlns="http://www.w3.org/2000/svg"><path d="M16 12v3H0v-3h16Zm0-6v3H0V6h16Zm0-6v3H0V0h16Z" fill="#69707D" fill-rule="evenodd"/></svg>
          </button>
          <a class="navbar-brand pt-2 pe-md-3 pt-lg-0 pe-lg-5 me-lg-2 me-xxl-5 mb-1 mb-xxl-4 mx-0 mt-md-3 mt-xxl-5" href="#"><svg class = "shopping-logo" viewbox = "0 0 138 20" width="138" height="20" xmlns="http://www.w3.org/2000/svg"><path d="M8.217 20c4.761 0 7.519-.753 7.519-4.606 0-3.4-3.38-4.172-6.66-4.682l-.56-.085-.279-.041-.35-.053c-2.7-.405-3.18-.788-3.18-1.471 0-.478.49-1.331 2.843-1.331 2.455 0 3.493.647 3.493 1.87v.134h4.281v-.133c0-2.389-1.35-5.238-7.774-5.238-5.952 0-7.201 2.584-7.201 4.752 0 3.097 2.763 4.086 7.223 4.675.21.028.433.054.659.081 1.669.197 3.172.42 3.172 1.585 0 1.01-1.615 1.222-3.298 1.222-2.797 0-3.784-.593-3.784-1.92v-.134H.002L0 14.926v.317c.008.79.118 1.913 1.057 2.862C2.303 19.362 4.712 20 8.217 20Zm13.21 0v-7.49c0-2.104.547-4.423 4.176-4.423 3.915 0 3.778 2.777 3.768 4.042V20h4.18v-7.768c0-2.264-.176-7.766-6.732-7.766-2.778 0-4.192.911-5.195 2.28h-.197V4.467H17.22V20h4.207Zm21.959 0c5.094 0 7.787-2.07 8.217-5.405H47.53c-.386 1.02-1.63 1.72-4.143 1.72-2.721 0-3.962-1.03-4.25-3.106h12.527c.24-2.13-.029-5.417-3.026-7.44v.005c-1.312-.915-3.056-1.465-5.251-1.465-5.24 0-8.336 2.772-8.336 7.845 0 5.17 3.02 7.846 8.336 7.846Zm4.099-9.574h-8.188c.486-1.574 1.764-2.431 4.089-2.431 2.994 0 3.755 1.267 4.099 2.431ZM70.499 20V4.457H66.29V6.74h-.176c-1.053-1.377-2.809-2.283-5.677-2.283-6.433 0-7.225 5.293-7.253 7.635v.137c0 2.092.732 7.771 7.241 7.771 2.914 0 4.684-.818 5.734-2.169h.131V20H70.5Zm-8.854-3.623c-3.996 0-4.447-3.032-4.447-4.148 0-1.21.426-4.148 4.455-4.148 3.631 0 4.374 2.044 4.374 4.148 0 2.35-.742 4.148-4.382 4.148ZM88.826 20l-6.529-9.045 6.588-6.488h-5.827l-6.836 6.756V0h-4.187v19.954h4.187V16.94l3.02-2.976L83.6 20h5.226Zm9.9 0c5.094 0 7.786-2.07 8.217-5.405h-4.074c-.387 1.02-1.63 1.72-4.143 1.72-2.721 0-3.962-1.03-4.25-3.106h12.527c.24-2.13-.029-5.417-3.026-7.44v.005c-1.312-.915-3.057-1.465-5.251-1.465-5.24 0-8.336 2.772-8.336 7.845 0 5.17 3.02 7.846 8.336 7.846Zm4.098-9.574h-8.187c.485-1.574 1.763-2.431 4.089-2.431 2.994 0 3.755 1.267 4.098 2.431ZM112.76 20v-6.97c0-2.103.931-4.542 4.05-4.542 1.33 0 2.393.236 2.785.346l.67-3.976c-.728-.16-1.626-.392-2.757-.392-2.665 0-3.622.794-4.486 2.282h-.262V4.466h-4.21V20h4.21Zm17.221 0c4.761 0 7.519-.753 7.519-4.606 0-3.4-3.38-4.172-6.66-4.682l-.56-.085-.279-.041-.349-.053c-2.701-.405-3.181-.788-3.181-1.471 0-.478.49-1.331 2.843-1.331 2.455 0 3.493.647 3.493 1.87v.134h4.282v-.133c0-2.389-1.35-5.238-7.775-5.238-5.952 0-7.201 2.584-7.201 4.752 0 3.097 2.763 4.086 7.224 4.675.21.028.432.054.658.081 1.669.197 3.172.42 3.172 1.585 0 1.01-1.615 1.222-3.298 1.222-2.796 0-3.784-.593-3.784-1.92v-.134h-4.319l-.001.301v.317c.008.79.117 1.913 1.056 2.862 1.246 1.257 3.655 1.895 7.16 1.895Z" fill="#1D2026" fill-rule="nonzero"/></svg></a>
          <div class="collapse navbar-collapse mt-4 mt-lg-2 mt-xxl-0 pt-lg-1">
              <a class = "nav-link header-link px-0 pb-4 pb-lg-5 me-3 me-lg-4 mt-xxl-5" href="#">Collections</a>
              <a class = "nav-link header-link px-0 pb-4 pb-lg-5 me-3 me-lg-4 mt-xxl-5" href="#">Men</a>
              <a class = "nav-link header-link px-0 pb-4 pb-lg-5 me-3 me-lg-4 mt-xxl-5" href="#">Women</a>
              <a class = "nav-link header-link px-0 pb-4 pb-lg-5 me-3 me-lg-4 mt-xxl-5" href="#">About</a>
              <a class = "nav-link header-link px-0 pb-4 pb-lg-5 me-5 mt-xxl-5" href="#">Contact</a>
          </div>
        </div>
        <div class="d-inline-flex">
          <div class="dropdown position-static">
            <button type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" id="dropdown-cart" class="btn cart"><span class="cart-amount-holder display-none">0</span><svg class="cart-svg" viewBox = "0 0 22 20" width="22" height="20" xmlns="http://www.w3.org/2000/svg"><path class="svg-cart" d="M20.925 3.641H3.863L3.61.816A.896.896 0 0 0 2.717 0H.897a.896.896 0 1 0 0 1.792h1l1.031 11.483c.073.828.52 1.726 1.291 2.336C2.83 17.385 4.099 20 6.359 20c1.875 0 3.197-1.87 2.554-3.642h4.905c-.642 1.77.677 3.642 2.555 3.642a2.72 2.72 0 0 0 2.717-2.717 2.72 2.72 0 0 0-2.717-2.717H6.365c-.681 0-1.274-.41-1.53-1.009l14.321-.842a.896.896 0 0 0 .817-.677l1.821-7.283a.897.897 0 0 0-.87-1.114ZM6.358 18.208a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm10.015 0a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm2.021-7.243-13.8.81-.57-6.341h15.753l-1.383 5.53Z" fill="#69707D" fill-rule="nonzero"/></svg></button>
            <div class="container dropdown-menu" aria-labelledby="dropdown-cart">
              <div class="pb-1 py-0 my-0 modal-cart-header border-bottom">
                <p class="cart-title mt-2 ps-4">Cart</p>
              </div>
              <div class="modal-body-empty justify-content-center my-1 py-5">
                <p class="empty-text">Your cart is empty.</p>
              </div>
              <div class="modal-body-items row g-0 mt-4 pt-xl-3">
                <div class="d-flex justify-content-center col-3 g-0 ps-3 pe-2">
                  <div class="cart-holder w-75">
                    <img class="w-100 cart-image" src="../wp-content/themes/twentytwenty-child/assets/images/shopping-page-images/icon-menu.svg" alt="Menu">
                  </div>
                </div>
                <div class=" g-0 p-0 m-0 col-7">
                  <p class="cart-item-title">Fall Limited Edition Sneakers</p>
                  <p class="cart-item-price">$125.00 x <span class="multiply-amount"></span><span class="cart-item-total"></span></p>
                </div>
                <div class="offset-1 col-1 g-0 d-flex align-items-center justify-content-end">
                  <button type="button" class="btn delete-button"><svg class="trashcan" viewBox = "0 0 14 26" width="14" height="16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path class="delete-path" d="M0 2.625V1.75C0 1.334.334 1 .75 1h3.5l.294-.584A.741.741 0 0 1 5.213 0h3.571a.75.75 0 0 1 .672.416L9.75 1h3.5c.416 0 .75.334.75.75v.875a.376.376 0 0 1-.375.375H.375A.376.376 0 0 1 0 2.625Zm13 1.75V14.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 1 14.5V4.375C1 4.169 1.169 4 1.375 4h11.25c.206 0 .375.169.375.375ZM4.5 6.5c0-.275-.225-.5-.5-.5s-.5.225-.5.5v7c0 .275.225.5.5.5s.5-.225.5-.5v-7Zm3 0c0-.275-.225-.5-.5-.5s-.5.225-.5.5v7c0 .275.225.5.5.5s.5-.225.5-.5v-7Zm3 0c0-.275-.225-.5-.5-.5s-.5.225-.5.5v7c0 .275.225.5.5.5s.5-.225.5-.5v-7Z" id="a"/></defs><use fill="#C3CAD9" fill-rule="nonzero" xlink:href="#a"/></svg></button>
                </div>
              </div>
              <div class="checkout-row row g-0">
                <div class="offset-1 col-10 g-0 mt-2 mt-sm-3 mb-xl-5 mt-xl-5 mb-3 mb-sm-4">
                  <button type="button" class="btn checkout-button justify-content-center py-2 py-sm-3 w-100" data-bs-dismiss="modal">Checkout</button>
                </div>
              </div>
            </div>
          </div>
          <div class="avatar-holder mt-2 mt-md-1 mt-lg-0 me-4 me-md-0 mb-md-3 mb-xxl-0 mt-xxl-1">
            <img class="avatar w-100" src="../wp-content/themes/twentytwenty-child/assets/images/shopping-page-images/image-avatar.png" alt="avatar">
          </div>
        </div>
      </nav> 
    </div>
  </header>
  <main>
    <div class="container-fluid">
      <div class="row">
        <section class="col-md-6 left-col mt-md-5 mt-lg-0 g-0">
          <div class="row main-image-row g-0">
            <div class="col-12 mb-4 mb-md-0 offset-md-2 col-md-10 offset-xl-3 col-xl-9 g-0">
              
                <div id="mainCarousel" class="carousel slide carousel-fade" data-bs-interval="false" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="main-image mt-lg-5 mb-lg-2 w-100" data-bs-toggle="modal" data-bs-target="#shoeModal" src="../wp-content/themes/twentytwenty-child/assets/images/shopping-page-images/image-product-1.jpg" alt="A pair of tan and white sneakers with white shoelaces and flat tread">
                      
                    </div>
                  </div>
                  <button class="carousel-control-prev d-md-none ms-3" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                    <span aria-hidden="true"><svg class="ms-2 prev-svg" width="13" height="18" viewBox="5 5 17 17" xmlns="http://www.w3.org/2000/svg"><path d="M11 1 3 9l8 8" stroke="#000000" stroke-width="4" fill="none" fill-rule="evenodd"/></svg></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next d-md-none me-3" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                    <span aria-hidden="true"><svg class="next-svg" viewBox="5 5 17 17" width="13" height="18" xmlns="http://www.w3.org/2000/svg"><path d="m2 1 8 8-8 8" stroke="#000000" stroke-width="4" fill="none" fill-rule="evenodd"/></svg></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              
            </div>
          </div>
          <div class="row thumbnail-row d-none justify-content-between d-md-flex g-0 mt-3">
            <div class="offset-2 offset-xl-3 col-2 thumbnail-shoe-div"><img class="thumbnail-shoe" src="../wp-content/themes/twentytwenty-child/assets/images/shopping-page-images/image-product-1-thumbnail.jpg"></div>
            <div class="col-2 g-0 thumbnail-shoe-div"><img class="thumbnail-shoe" src="../wp-content/themes/twentytwenty-child/assets/images/shopping-page-images/image-product-2-thumbnail.jpg"></div>
            <div class="col-2 g-0 thumbnail-shoe-div"><img class="thumbnail-shoe" src="../wp-content/themes/twentytwenty-child/assets/images/shopping-page-images/image-product-3-thumbnail.jpg"></div>
            <div class="col-2 g-0 thumbnail-shoe-div"><img class="thumbnail-shoe" src="../wp-content/themes/twentytwenty-child/assets/images/shopping-page-images/image-product-4-thumbnail.jpg"></div>
          </div>
        </section>
        <section class="col-md-6 px-4 ps-md-2 ps-lg-4 pe-md-5 pe-lg-1 right-col mt-lg-4 mt-xl-0">
          <div class="row information-row ms-md-0 ps-md-0 g-0">
            <div class="col-12 offset-md-1 col-md-11 g-0 pt-xl-5">
            <h1 class="title pt-md-1 pt-lg-5 mt-md-5 pt-xl-0 mt-lg-4 mb-md-3">Sneaker Company</h1>
            <h2 class="shoe-name   me-lg-5 pe-lg-5">Fall Limited Edition Sneakers</h2>
            <p class="description mb-4 me-lg-5 mt-lg-4">These low-profile sneakers are your perfect casual wear companion. Featuring a durable rubber outer sole, they’ll withstand everything the weather can offer.</p>
          </div>
          <div class="row d-flex g-0 align-items-center price-row">
            <div class="col-4 offset-md-1 col-lg-3 col-xxl-2">
              <p class="current-price">$<span data-price="125.00" class="set-price"></span></p>
            </div>
            <div class="col-2 px-lg-3 mb-1 text-center sale-percent">
              <p data-sale="50%" class="ms-1 sale-tag"></p>
            </div>
            <div class="offset-3 offset-md-2 offset-lg-1 col-lg-11 d-flex justify-content-end justify-content-lg-start col-3">
              <p data-previous-price ="$250.00" class="mt-2 mt-md-3 mt-lg-0 mb-xxl-5 previous-price"></p>
            </div>
          </div>

          <div class="row cart-add-row g-0 mt-2 d-flex align-items-center">
            <div class="d-flex justify-content-start offset-md-1 col-lg-2 col-5 col-xl-1 minus py-2 py-xl-3 py-xxl-4">
              <div class="minus-box">
                <svg class="minus-sign mb-1 ms-4" viewBox="0 0 12 4" width="12" height="4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M11.357 3.332A.641.641 0 0 0 12 2.69V.643A.641.641 0 0 0 11.357 0H.643A.641.641 0 0 0 0 .643v2.046c0 .357.287.643.643.643h10.714Z" id="a"/></defs><use fill="#FF7E1B" fill-rule="nonzero" xlink:href="#a"/></svg>
            </div>
            </div>
            <div class="d-flex justify-content-center col-2 col-md-1 py-2 py-xl-3 py-xxl-4 amount">
              <div class="number-box">
              <p class="number-holder">0</p>
            </div>
            </div>
            <div class="d-flex justify-content-end col-5 plus py-2 py-xl-3 py-xxl-4 col-lg-2 col-xl-1">
              <div class="plus-box"><svg class="plus-sign mb-1 me-4" viewBox="0 0 12 12" width="12" height="12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M12 7.023V4.977a.641.641 0 0 0-.643-.643h-3.69V.643A.641.641 0 0 0 7.022 0H4.977a.641.641 0 0 0-.643.643v3.69H.643A.641.641 0 0 0 0 4.978v2.046c0 .356.287.643.643.643h3.69v3.691c0 .356.288.643.644.643h2.046a.641.641 0 0 0 .643-.643v-3.69h3.691A.641.641 0 0 0 12 7.022Z" id="b"/></defs><use fill="#FF7E1B" fill-rule="nonzero" xlink:href="#b"/></svg>
            </div>
            </div>
            <div class="col-12 offset-md-1 col-md-11 add-cart-div col-lg-5 offset-lg-0 col-xl-6 text-center mt-3 mt-lg-0 ms-lg-2">
              <button type="button" class="btn py-xl-3 py-xxl-4 add-cart-button w-100" data-bs-toggle="modal" data-bs-target="#thank-you-modal"><svg class="add-logo mb-md-1" viewBox = "0 0 35 20" width="35" height="20" xmlns="http://www.w3.org/2000/svg"><path d="M20.925 3.641H3.863L3.61.816A.896.896 0 0 0 2.717 0H.897a.896.896 0 1 0 0 1.792h1l1.031 11.483c.073.828.52 1.726 1.291 2.336C2.83 17.385 4.099 20 6.359 20c1.875 0 3.197-1.87 2.554-3.642h4.905c-.642 1.77.677 3.642 2.555 3.642a2.72 2.72 0 0 0 2.717-2.717 2.72 2.72 0 0 0-2.717-2.717H6.365c-.681 0-1.274-.41-1.53-1.009l14.321-.842a.896.896 0 0 0 .817-.677l1.821-7.283a.897.897 0 0 0-.87-1.114ZM6.358 18.208a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm10.015 0a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm2.021-7.243-13.8.81-.57-6.341h15.753l-1.383 5.53Z" fill="#ffffff" fill-rule="nonzero"/></svg>Add to cart</button>
            </div>
          </div>
          </div>
        </section>
      </div>
    </div>
  </main>

<!-------------------------------Modals------------------------------------------------------->
  <div class="modal fade" id="thank-you-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content thankyou-content">
        <div class="modal-header thankyou-header px-0 pb-3">
          <button type="button" class="btn d-flex ms-auto p-0" data-bs-dismiss="modal" aria-label="Close"><svg width="14" height="15" xmlns="http://www.w3.org/2000/svg"><path class="close-svg" d="m11.596.782 2.122 2.122L9.12 7.499l4.597 4.597-2.122 2.122L7 9.62l-4.595 4.597-2.122-2.122L4.878 7.5.282 2.904 2.404.782l4.595 4.596L11.596.782Z" fill="#FFFFFF" fill-rule="evenodd"/></svg></button>
        </div>
        
        <div class="modal-body thankyou-body">
          <p class="add-cart-text text-center">Item added to cart</p>
          <p class="thank-you text-center">Thank you for shopping</p>
        </div>
        <div class="modal-footer justify-content-center thankyou-footer">
          <button type="button" class="btn thankyou-button" data-bs-dismiss="modal">Keep shopping</button>
          <button type="button" class="btn thankyou-button" data-bs-dismiss="modal">Go to checkout</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="shoeModal" tabindex="-1" aria-labelledby="shoeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
     
      <div class="modal-content shoe-modal-content"> 
        <button type="button" class="btn d-flex ms-auto p-0" data-bs-dismiss="modal" aria-label="Close"><svg width="14" height="15" xmlns="http://www.w3.org/2000/svg"><path class="close-svg" d="m11.596.782 2.122 2.122L9.12 7.499l4.597 4.597-2.122 2.122L7 9.62l-4.595 4.597-2.122-2.122L4.878 7.5.282 2.904 2.404.782l4.595 4.596L11.596.782Z" fill="#FFFFFF" fill-rule="evenodd"/></svg></button>     
        <div class="modal-body px-0">
          <div class="container">
            <div class="row">
              <div class="col-12 g-0">
                <div id="modal-carousel" class="carousel slide carousel-fade" data-bs-interval="false" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="modal-image w-100" src="" alt="">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#modal-carousel" data-bs-slide="prev">
                    <span aria-hidden="true"><svg class="prev-svg mb-1" width="13" height="18" xmlns="http://www.w3.org/2000/svg"><path class="svg-on-hover" d="M11 1 3 9l8 8" stroke="#000000" stroke-width="3" fill="none" fill-rule="evenodd"/></svg></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#modal-carousel" data-bs-slide="next">
                    <span aria-hidden="true"><svg class="next-svg me-2 mb-1" width="13" height="18" xmlns="http://www.w3.org/2000/svg"><path class="svg-on-hover" d="m2 1 8 8-8 8" stroke="#000000" stroke-width="3" fill="none" fill-rule="evenodd"/></svg></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
            <div class="row modal-thumbnail-row justify-content-between px-4 mx-1">
              <div class="g-0 col-2 modal-thumbnail-div"><img class="modal-thumbnail" src="../wp-content/themes/twentytwenty-child/assets/images/shopping-page-images/image-product-1-thumbnail.jpg" alt="Thumbnail image of a pair of tan and white sneakers with white shoelaces and flat tread"></div>
              <div class="col-2 g-0 modal-thumbnail-div"><img class="modal-thumbnail" src="../wp-content/themes/twentytwenty-child/assets/images/shopping-page-images/image-product-2-thumbnail.jpg" alt="Thumbnail image of a pair of tan and white sneakers with white shoelaces and orange back"></div>
              <div class="col-2 g-0 modal-thumbnail-div"><img class="modal-thumbnail" src="../wp-content/themes/twentytwenty-child/assets/images/shopping-page-images/image-product-3-thumbnail.jpg" alt="Thumbnail image of a right tan and white sneaker balancing on two rocks with orange background"></div>
              <div class="col-2 g-0 modal-thumbnail-div"><img class="modal-thumbnail" src="../wp-content/themes/twentytwenty-child/assets/images/shopping-page-images/image-product-4-thumbnail.jpg" alt="Thumbnail image of side view of left tan and white sneaker with 1/2 inch heal"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-------------------------------Modals------------------------------------------------------->

<!-------------------------------Offcanvas sidenav-------------------------------------------->
<div class="offcanvas shopping offcanvas-start" tabindex="-1" id="shoppingSupportedContent" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <button type="button" class="btn ps-2 text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><img src="../wp-content/themes/twentytwenty-child/assets/images/shopping-page-images/icon-close.svg"></button>
  </div>
  <div class="offcanvas-body">
    <ul class='navbar-nav flex-nowrap shopping-unordered-list ms-2'>
      <li class='nav-item'><a class = "nav-link offcanvas-link" href="#">Collections</a></li> 
      <li class='nav-item'><a class = "nav-link offcanvas-link" href="#">Men</a></li>
      <li class='nav-item'><a class = "nav-link offcanvas-link" href="#">Women</a></li>
      <li class='nav-item'><a class = "nav-link offcanvas-link" href="#">About</a></li>
      <li class='nav-item'><a class = "nav-link offcanvas-link" href="#">Contact</a></li>
    </ul>
  </div>
</div>

<?php 
  get_footer('shopping')
?>
