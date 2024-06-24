@extends('web.layouts.app')
@Section('main_section')
<section>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide py-md-5">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('images/6635c703cb818.webp')}}" class="d-block w-100 rounded rounded-5 img_height" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/6635c6f27bdf3.webp')}}" class="d-block w-100 rounded rounded-5 img_height" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
</section>
<section class="py-5">
  <div class="container">
    <div class="row g-3 text-center">
      <div class="col-xl-3 col-6">
        <div>
        <b>WORLDWIDE DELIVERY</b>
        <p>Fast & Free International Shipping</p>
        </div>
      </div>
      <div class="col-xl-3 col-6">
        <div>
        <b>SAFE CHECKOUT</b>
        <p>100% Secure checkout process.</p>
        </div>
      </div>
      <div class="col-xl-3 col-6">
        <div>
        <b>ASSURED HAPPINESS</b>
        <p>Weekly giveaway/rewards Programms</p>
        </div>
      </div>
      <div class="col-xl-3 col-6">
        <div>
        <b>GIFT WRAPPING</b>
        <p>Perfectly wrapped gift for Loved one</p>
        </div>
      </div>
    </div>
  </div>
</section>
<hr class="mb-5">
<section>
  <div class="container">
    <div class="d-flex align-items-center justify-content-between mb-3">
      <h4 class="titles">Deals of The Day</h4>
      <a href="#" class="btn btn_deal">See all deals 
        <i class="bi bi-chevron-right"></i>  
      </a>
    </div>
    <div class="row">
      <div class="deal-carousel owl-carousel owl-theme">
        <div class="item">
        <a href="#" class="text-decoration-none">
        <div class="card mb-3">
          <div class="position-relative">
          <img src="{{asset('images/medium_47.jpg')}}" class="card-img-top rounded" alt="...">
        <div class="position-absolute bottom-0 start-0 mb-3 ms-2">
        <small class="offer_lab p-1 rounded rounded-2">upto 70% off</small>
        </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">Product 1</h5>
          </div>
        </div>
      </a>
      </div>
      <div class="item">
        <a href="#" class="text-decoration-none">
        <div class="card mb-3">
          <div class="position-relative">
            <img src="{{asset('images/medium_47.jpg')}}" class="card-img-top rounded" alt="...">
          <div class="position-absolute bottom-0 start-0 mb-3 ms-2">
          <small class="offer_lab p-1 rounded rounded-2">upto 70% off</small>
          </div>
            </div>
          <div class="card-body">
            <h5 class="card-title">Product 2</h5>
          </div>
        </div>
      </a>
      </div>
      <div class="item">
        <a href="#" class="text-decoration-none">
        <div class="card mb-3">
          <div class="position-relative">
            <img src="{{asset('images/medium_47.jpg')}}" class="card-img-top rounded" alt="...">
          <div class="position-absolute bottom-0 start-0 mb-3 ms-2">
          <small class="offer_lab p-1 rounded rounded-2">upto 70% off</small>
          </div>
            </div>
          <div class="card-body">
            <h5 class="card-title">Product 3</h5>
          </div>
        </div>
        </a>
      </div>
      <div class="item">
        <a href="#" class="text-decoration-none">
        <div class="card mb-3">
          <div class="position-relative">
            <img src="{{asset('images/medium_47.jpg')}}" class="card-img-top rounded" alt="...">
          <div class="position-absolute bottom-0 start-0 mb-3 ms-2">
          <small class="offer_lab p-1 rounded rounded-2">upto 70% off</small>
          </div>
            </div>
          <div class="card-body">
            <h5 class="card-title">Product 4</h5>
          </div>
        </div>
        </a>
      </div>
      <div class="item">
        <a href="#" class="text-decoration-none">
        <div class="card mb-3">
          <div class="position-relative">
            <img src="{{asset('images/medium_47.jpg')}}" class="card-img-top rounded" alt="...">
          <div class="position-absolute bottom-0 start-0 mb-3 ms-2">
          <small class="offer_lab p-1 rounded rounded-2">upto 70% off</small>
          </div>
            </div>
          <div class="card-body">
            <h5 class="card-title">Product 5</h5>
          </div>
        </div>
        </a>
      </div>
      <div class="item">
        <a href="#" class="text-decoration-none">
        <div class="card mb-3">
          <div class="position-relative">
            <img src="{{asset('images/medium_47.jpg')}}" class="card-img-top rounded" alt="...">
          <div class="position-absolute bottom-0 start-0 mb-3 ms-2">
          <small class="offer_lab p-1 rounded rounded-2">upto 70% off</small>
          </div>
            </div>
          <div class="card-body">
            <h5 class="card-title">Porduct 6</h5>
          </div>
        </div>
        </a>
      </div>
      <div class="item">
        <a href="#" class="text-decoration-none">
        <div class="card mb-3">
          <div class="position-relative">
            <img src="{{asset('images/medium_47.jpg')}}" class="card-img-top rounded" alt="...">
          <div class="position-absolute bottom-0 start-0 mb-3 ms-2">
          <small class="offer_lab p-1 rounded rounded-2">upto 70% off</small>
          </div>
            </div>
          <div class="card-body">
            <h5 class="card-title">Porduct 7</h5>
          </div>
        </div>
        </a>
      </div>
      <div class="item">
        <a href="#" class="text-decoration-none">
        <div class="card mb-3">
          <div class="position-relative">
            <img src="{{asset('images/medium_47.jpg')}}" class="card-img-top rounded" alt="...">
          <div class="position-absolute bottom-0 start-0 mb-3 ms-2">
          <small class="offer_lab p-1 rounded rounded-2">upto 70% off</small>
          </div>
            </div>
          <div class="card-body">
            <h5 class="card-title">Porduct 8</h5>
          </div>
        </div>
        </a>
      </div>
    </div>
  </div>
  </div>
</section>
<hr class="my-5">
<section>
  <div class="container">
    <h4 class="titles">Popular Products</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, tempora commodi incidunt deserunt eos iusto unde voluptates natus, necessitatibus qui sed suscipit dolores molestias esse dolor eligendi. Laboriosam, aspernatur animi.</p>
    <div class="row">
      <div class="col-lg-4">
        <div class="h-100">
          <img src="{{asset('images/GALL_2.jpg')}}" class="w-100 h-100 object-fit-cover" alt="">
        </div>
      </div>
      <div class="col-lg-8">
        <div class="row g-3">
          <div class="col-sm-4 col-lg-3 col-6">
            <div class="bg-white shadow rounded overflow-hidden border product_img">
                <a href="#"></a>
                  <figure>
                    <img src="{{asset('images/661e5d03b6431.webp')}}" class="img-fluid" alt="">
                  </figure>
                  <div class="p-3 text-center">
                    <b>Product 1</b>
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                      <del class="text-danger">₹ 10,000</del>
                      <div class="fs-4 ms-2 text-success">
                        ₹ 9,000
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-3 col-6">
            <div class="bg-white shadow rounded overflow-hidden border product_img">
                <a href="#"></a>
                  <figure>
                    <img src="{{asset('images/661e50fc3bc66.webp')}}" class="img-fluid" alt="">
                  </figure>
                  <div class="p-3 text-center">
                    <b>Product 2</b>
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                      <del class="text-danger">₹ 10,000</del>
                      <div class="fs-4 ms-2 text-success">
                        ₹ 9,000
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-3 col-6">
            <div class="bg-white shadow rounded overflow-hidden border product_img">
                <a href="#"></a>
                  <figure>
                    <img src="{{asset('images/661e564818c82.webp')}}" class="img-fluid" alt="">
                  </figure>
                  <div class="p-3 text-center">
                    <b>Product 3</b>
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                      <del class="text-danger">₹ 10,000</del>
                      <div class="fs-4 ms-2 text-success">
                        ₹ 9,000
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-3 col-6">
            <div class="bg-white shadow rounded overflow-hidden border product_img">
                <a href="#"></a>
                  <figure>
                    <img src="{{asset('images/662a156b01f17.webp')}}" class="img-fluid" alt="">
                  </figure>
                  <div class="p-3 text-center">
                    <b>Product 4</b>
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                      <del class="text-danger">₹ 10,000</del>
                      <div class="fs-4 ms-2 text-success">
                        ₹ 9,000
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-3 col-6">
            <div class="bg-white shadow rounded overflow-hidden border product_img">
                <a href="#"></a>
                  <figure>
                    <img src="{{asset('images/66308e5dcb224.webp')}}" class="img-fluid" alt="">
                  </figure>
                  <div class="p-3 text-center">
                    <b>Product 5</b>
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                      <del class="text-danger">₹ 10,000</del>
                      <div class="fs-4 ms-2 text-success">
                        ₹ 9,000
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-3 col-6">
            <div class="bg-white shadow rounded overflow-hidden border product_img">
                <a href="#"></a>
                  <figure>
                    <img src="{{asset('images/663202ea4a77f.webp')}}" class="img-fluid" alt="">
                  </figure>
                  <div class="p-3 text-center">
                    <b>Product 6</b>
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                      <del class="text-danger">₹ 10,000</del>
                      <div class="fs-4 ms-2 text-success">
                        ₹ 9,000
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-3 col-6">
            <div class="bg-white shadow rounded overflow-hidden border product_img">
                <a href="#"></a>
                  <figure>
                    <img src="{{asset('images/6629f3b5f0d06.webp')}}" class="img-fluid" alt="">
                  </figure>
                  <div class="p-3 text-center">
                    <b>Product 7</b>
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                      <del class="text-danger">₹ 10,000</del>
                      <div class="fs-4 ms-2 text-success">
                        ₹ 9,000
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-3 col-6">
            <div class="bg-white shadow rounded overflow-hidden border product_img">
                <a href="#"></a>
                  <figure>
                    <img src="{{asset('images/6636034519377.webp')}}" class="img-fluid" alt="">
                  </figure>
                  <div class="p-3 text-center">
                    <b>Product 8</b>
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                      <del class="text-danger">₹ 10,000</del>
                      <div class="fs-4 ms-2 text-success">
                        ₹ 9,000
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 mx-auto text-center">
        <h4 class="titles mx-auto mb-2">Shop by Categories</h4>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, fugit deserunt reiciendis sint quis itaque architecto facere quia, quae quas quaerat ipsum, eum deleniti repellendus? Deserunt eius quod magni quasi.</p>
    </div>
    </div>
    <div class="row my-4 g-3">
      <div class="col-sm-2 col-6">
        <div class="rounded overflow-hidden shadow category_custom">
        <img src="{{asset('images/medium_70.png')}}" class="img-fluid rounded" alt="">
        <div class="text-center py-2">
        <b>Furniture</b>
        </div>
      </div>
      </div>
      <div class="col-sm-2 col-6">
        <div class="rounded overflow-hidden shadow category_custom">
        <img src="{{asset('images/medium_62.png')}}" class="img-fluid rounded" alt="">
        <div class="text-center py-2">
        <b>Decor</b>
        </div>
      </div>
      </div>
      <div class="col-sm-2 col-6">
        <div class="rounded overflow-hidden shadow category_custom">
        <img src="{{asset('images/medium_23.jpg')}}" class="img-fluid rounded" alt="">
        <div class="text-center py-2">
        <b>Exclusive</b>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="my-5">
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('images/web-banner-christmas-sale-holiday-260nw-1556756354.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/web-banner-christmas-sale-holiday-260nw-1556756354.webp')}}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
<section>
  <div class="container">
    <div class="row g-3 text-center align-items-center">
      <div class="col-xl-3 col-6">
        <div class="row align-items-center">
          <div class="col-sm-4">
            <img src="{{asset('images/organic-sustainable.webp')}}" alt="">
          </div>
          <div class="col-sm-8">
            <b>Organic + Sustainable</b>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-6">
        <div class="row align-items-center">
          <div class="col-sm-4">
            <img src="{{asset('images/aesthetic-design.webp')}}" alt="">
          </div>
          <div class="col-sm-8">
            <b>Aesthetic Design</b>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-6">
        <div class="row align-items-center">
          <div class="col-sm-4">
            <img src="{{asset('images/unique-and-trendy.webp')}}" alt="">
          </div>
          <div class="col-sm-8">
            <b>Unique & Trendy</b>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-6">
        <div class="row align-items-center">
          <div class="col-sm-4">
            <img src="{{asset('images/affordable-prices.webp')}}" alt="">
          </div>
          <div class="col-sm-8">
            <b>Affordable Prices</b>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="my-5">
  <div class="container">
    <h4 class="titles mb-3">Popular Searches</h4>
    <div class="text-center searchs">
      <a href="#">Christmas Decoration Items</a>
      <a href="#">Christmas Gifts</a>
      <a href="#">Scented Candles</a>
      <a href="#">Wall Clocks</a>
      <a href="#">Pendulum Clocks</a>
      <a href="#">Ganesha Water Fountains</a>
      <a href="#">Ganesha Paintings</a>
      <a href="#">Buddha Water Fountains</a>
      <a href="#">Buddha Paintings</a>
      <a href="#">Buddha Idols</a>
      <a href="#">Key Holders</a>
      <a href="#">Brass Diyas</a>
      <a href="#">Christmas Decoration Items</a>
      <a href="#">Christmas Gifts</a>
      <a href="#">Scented Candles</a>
      <a href="#">Wall Clocks</a>
      <a href="#">Pendulum Clocks</a>
      <a href="#">Ganesha Water Fountains</a>
      <a href="#">Ganesha Paintings</a>
      <a href="#">Buddha Water Fountains</a>
      <a href="#">Buddha Paintings</a>
      <a href="#">Buddha Idols</a>
      <a href="#">Key Holders</a>
      <a href="#">Brass Diyas</a>
    </div>
  </div>
  </div>
</section>
@endsection