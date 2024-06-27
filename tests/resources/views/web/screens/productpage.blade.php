@extends('web.layouts.app') 
@section('main_section')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 p-0">
                <div class="slider-for">
                    <div class="slider_height">
                        <img src="{{asset('images/661e5d03b6431.webp')}}" class="img-fluid" alt="">
                    </div>
                <div class="slider_height">
                    <img src="{{asset('images/661e5d70ad0c7.webp')}}" class="img-fluid" alt="">
                </div>
                </div>
                <div class="slider-nav">
                    <div>
                        <img src="{{asset('images/661e5d03b6431.webp')}}" class="img-fluid" alt="">
                    </div>
                    <div>
                        <img src="{{asset('images/661e5d70ad0c7.webp')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 my-5">
                <h4>"Krishna Raasleela“ Authentic Hand-Painted on Canvas Wall Art</h4 >
                <hr class="my-3">
                <div class="row align-items-center gap-lg-3 g-3">
                    <div class="col-4 col-lg-1">
                        Size:
                    </div>
                    <div class="col-8 col-lg-4">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>61 x 92 cm</option>
                          </select>
                    </div>
                </div>
                <hr class="my-3">
                <div class="d-flex align-items-center gap-lg-2">
                    <del class="text-danger">₹ 10,000</del>
                    <div class="fs-4 ms-2 text-success">₹ 9,000</div>
                </div>
                <hr class="mt-3 mb-5">
                <div class="row g-3">
                    <div class="col-6 col-sm">
                        <div class="d-flex gap-2 align-items-center">
                        <label for="qty">Qty:</label>
                        <input id="qty" value="1" class="form-control form-control-lg" type="number">
                        </div>
                    </div>
                    <div class="col-6 col-sm d-grid">
                        <a href="#" class="btn btn-outline-secondary py-lg-2"><i class="bi bi-cart-plus"></i> ADD TO CART</a>
                    </div>
                    <div class="col-sm d-grid">
                        <a href="#" class="btn btn-outline-warning py-lg-2"><i class="bi bi-cart"></i> BUY NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
           <hr class="my-3">
           <h5>SPECIFICATION</h5>
           <hr class="mt-3 mb-5">
           <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <td><b class="fw-semibold">Dimenstions</b></td>
                <td>61 x 92 cm</td>
              </tr>
              <tr>
                <td><b class="fw-semibold">SKU</b></td>
                <td>WP1</td>
              </tr>
              <tr>
                <td><b class="fw-semibold">Assembly</b></td>
                <td>No Assembly Required</td>
              </tr>
              <tr>
                <td><b class="fw-semibold">Product Type</b></td>
                <td>Divine Paintings</td>
              </tr>
              <tr>
                <td><b class="fw-semibold">Primary Material</b></td>
                <td>WOODEN</td>
              </tr>
            </table>
          </div> 
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <hr class="my-3">
            <h5>GENERAL INFORMATION</h5>
            <hr class="mt-3 mb-5">
            <div class="table-responsive">
             <table class="table table-striped">
               <tr>
                 <td><b class="fw-semibold">Code</b></td>
                 <td>WP1</td>
               </tr>
               <tr>
                 <td><b class="fw-semibold">Availability</b></td>
                 <td>In stock</td>
               </tr>
               <tr>
                 <td><b class="fw-semibold">Brand</b></td>
                 <td>Tejassvi</td>
               </tr>
               <tr>
                 <td><b class="fw-semibold">Country of Origin</b></td>
                 <td>India</td>
               </tr>
             </table>
           </div>
           <div class="p-3">
            <img src="{{asset('images/ready-to-ship.webp')}}" class="img-fluid" alt="">
        </div> 
         </div>
        </div>
        <div class="row my-5">
            <p>Product Size : 61 x 92 cm Description : Beautiful painting depicting Radha Krishna Raasleela in the garden. This is a fine detailed painting made completely by hand using a thin- pointed hair brush and natural stone colors on canvas. these paintings looks very beautiful in the house once displayed. what is Pichwai Art? Pichwai is a very old and tradition art form of Rajasthan, India. Pichwai is a devotional painting which is dedicated to lord krishna. Lord krishna is a symbol of love, peace and affection. Disclaimer : Each piece is handmade and it takes a lot of time and effort to make one piece. Our products are not perfect, they might have imperfections but that is the beauty of a handmade product. All pieces come with hook at the back for wall hanging purposes. Announcement : We are able to design custom made Cow Heads upon request. Simply let us know the color combination and design and we will try our best to replicate your vision!</p>
        </div>
    </div>
</section>
@endsection