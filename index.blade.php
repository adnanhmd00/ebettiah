@extends('layouts.header')

@section('content')

    <!-- Carousel Start -->
    <div  id="slider" class="carousel slide" data-ride="carousel" style="margin-top: 78px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/2 slider.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/7 slider.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/3 slider.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/4 slider.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/5 slider.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/6 slider.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/1 slider.jpg">
            </div>
        </div>
         <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#slider" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slider" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!-- Carousel Ends -->

    <!-- Cards Start -->
    <div class="p-2">
        <div class="row m-2">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body p-0">
                        <img  style="height: 230px; width: 100%;" class="img-responsive" src="assets/images/cards/1 card.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body p-0">
                        <img  style="height: 230px; width: 100%;" class="img-responsive" src="assets/images/cards/2 card.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body p-0">
                        <img  style="height: 230px; width: 100%;" class="img-responsive" src="assets/images/cards/3 card.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cards Ends -->

    <!-- Best Sellers Starts -->

    <!-- Best Sellers Ends -->

    <!-- Product Sliders Start -->
    <div class="light-grey m-auto p-2">
        <div class="card p-4">
            <h5 class="ml-4 font-weight-bold">Top Products</h5>
            <section class="responsive slider m-auto mt-4">
                <div class="wg-box-content shadow mb-2">
                    <div class="shadow rounded">
                          <img class="wg-box-content-image" style="height: 200px;" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                        <div class="p-1 pt-3">
                            <h6 class="text-left underline text-dark text-bold"><u>This is name</u></h6>
                           <div class="row">
                            <div class="col-md-6">
                                <div class="text-left">
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                </div>
                            </div>
                            <div class="col-md-6"><h6 class="text-right price">Rs. 500000</h6></div>
                           </div>
                           <!-- <div class="row">
                               <div class="col-md-6"> 
                                   <button class="btn btn-outline-danger">Add To Cart</button>
                               </div>
                               <div class="col-md-6">
                                   <button class="btn btn-outline-secondary text-white">Buy Now</button>
                               </div>
                           </div> -->
                        </div>
                    </div>
                  </div> 
                  <!-- <div class="wg-box-content shadow">
                      <div class="card rounded">
                          <a href="#">
                            <div class="wg-box-content-overlay"></div>
                            <img class="wg-box-content-image" style="height: 200px;" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                            <div class="wg-box-content-details wg-box-fadeIn-bottom">
                              <h4 class="wg-box-content-text text-white">This is name</h4>
                              <button class="wg-box-content-text btn btn-outline-warning"><i class="fa fa-shopping-cart"></i>Add To Cart</button>
                              <button class="wg-box-content-text btn btn-outline-danger"><i class="fa fa-heart"></i></button>
                            </div>
                          </a>
                          <div class="card-body p-1 pt-3">
                              <h6 class="text-left underline text-dark text-bold"><u>This is name</u></h6>
                             <div class="row">
                              <div class="col-md-6">
                                  <div class="text-left">
                                      <span class="fa fa-star small-font"></span>
                                      <span class="fa fa-star small-font"></span>
                                      <span class="fa fa-star small-font"></span>
                                      <span class="fa fa-star small-font"></span>
                                      <span class="fa fa-star small-font"></span>
                                  </div>
                              </div>
                              <div class="col-md-6"><h6 class="text-right price">Rs. 500000</h6></div>
                             </div>
                          </div>
                      </div>
                    </div>  -->
                    
                <div class="wg-box-content shadow mb-2">
                    <div class="shadow rounded">
                          <img class="wg-box-content-image" style="height: 200px;" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                        <div class="p-1 pt-3">
                            <h6 class="text-left underline text-dark text-bold"><u>This is name</u></h6>
                           <div class="row">
                            <div class="col-md-6">
                                <div class="text-left">
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                </div>
                            </div>
                            <div class="col-md-6"><h6 class="text-right price">Rs. 500000</h6></div>
                           </div>
                           <!-- <div class="row">
                            <div class="col-md-6"> 
                                <button class="btn btn-outline-danger">Add To Cart</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-outline-secondary text-white">Buy Now</button>
                            </div>
                        </div> -->
                        </div>
                    </div>
                  </div> 
                  
                <div class="wg-box-content shadow mb-2">
                    <div class="shadow rounded">
                          <img class="wg-box-content-image" style="height: 200px;" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                        <div class="p-1 pt-3">
                            <h6 class="text-left underline text-dark text-bold"><u>This is name</u></h6>
                           <div class="row">
                            <div class="col-md-6">
                                <div class="text-left">
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                </div>
                            </div>
                            <div class="col-md-6"><h6 class="text-right price">Rs. 500000</h6></div>
                           </div>
                           <!-- <div class="row">
                               <div class="col-md-6"> 
                                   <button class="btn btn-outline-danger">Add To Cart</button>
                               </div>
                               <div class="col-md-6">
                                   <button class="btn btn-outline-secondary text-white">Buy Now</button>
                               </div>
                           </div> -->
                        </div>
                    </div>
                  </div> 
                  
                <div class="wg-box-content shadow mb-2">
                    <div class="shadow rounded">
                          <img class="wg-box-content-image" style="height: 200px;" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                        <div class="p-1 pt-3">
                            <h6 class="text-left underline text-dark text-bold"><u>This is name</u></h6>
                           <div class="row">
                            <div class="col-md-6">
                                <div class="text-left">
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                </div>
                            </div>
                            <div class="col-md-6"><h6 class="text-right price">Rs. 500000</h6></div>
                           </div>
                           <!-- <div class="row">
                               <div class="col-md-6"> 
                                   <button class="btn btn-outline-danger">Add To Cart</button>
                               </div>
                               <div class="col-md-6">
                                   <button class="btn btn-outline-secondary text-white">Buy Now</button>
                               </div>
                           </div> -->
                        </div>
                    </div>
                  </div> 
                  
                <div class="wg-box-content shadow mb-2">
                    <div class="shadow rounded">
                          <img class="wg-box-content-image" style="height: 200px;" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                        <div class="p-1 pt-3">
                            <h6 class="text-left underline text-dark text-bold"><u>This is name</u></h6>
                           <div class="row">
                            <div class="col-md-6">
                                <div class="text-left">
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                </div>
                            </div>
                            <div class="col-md-6"><h6 class="text-right price">Rs. 500000</h6></div>
                           </div>
                           <!-- <div class="row">
                               <div class="col-md-6"> 
                                   <button class="btn btn-outline-danger">Add To Cart</button>
                               </div>
                               <div class="col-md-6">
                                   <button class="btn btn-outline-secondary text-white">Buy Now</button>
                               </div>
                           </div> -->
                        </div>
                    </div>
                  </div> 
                  
                <div class="wg-box-content shadow mb-2">
                    <div class="shadow rounded">
                          <img class="wg-box-content-image" style="height: 200px;" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                        <div class="p-1 pt-3">
                            <h6 class="text-left underline text-dark text-bold"><u>This is name</u></h6>
                           <div class="row">
                            <div class="col-md-6">
                                <div class="text-left">
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                </div>
                            </div>
                            <div class="col-md-6"><h6 class="text-right price">Rs. 500000</h6></div>
                           </div>
                           <!-- <div class="row">
                               <div class="col-md-6"> 
                                   <button class="btn btn-outline-danger">Add To Cart</button>
                               </div>
                               <div class="col-md-6">
                                   <button class="btn btn-outline-secondary text-white">Buy Now</button>
                               </div>
                           </div> -->
                        </div>
                    </div>
                  </div> 
                  
                <div class="wg-box-content shadow mb-2">
                    <div class="shadow rounded">
                          <img class="wg-box-content-image" style="height: 200px;" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                        <div class="p-1 pt-3">
                            <h6 class="text-left underline text-dark text-bold"><u>This is name</u></h6>
                           <div class="row">
                            <div class="col-md-6">
                                <div class="text-left">
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                </div>
                            </div>
                            <div class="col-md-6"><h6 class="text-right price">Rs. 500000</h6></div>
                           </div>
                           <!-- <div class="row">
                               <div class="col-md-6"> 
                                   <button class="btn btn-outline-danger">Add To Cart</button>
                               </div>
                               <div class="col-md-6">
                                   <button class="btn btn-outline-secondary text-white">Buy Now</button>
                               </div>
                           </div> -->
                        </div>
                    </div>
                  </div> 
                  
                <div class="wg-box-content shadow mb-2">
                    <div class="shadow rounded">
                          <img class="wg-box-content-image" style="height: 200px;" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                        <div class="p-1 pt-3">
                            <h6 class="text-left underline text-dark text-bold"><u>This is name</u></h6>
                           <div class="row">
                            <div class="col-md-6">
                                <div class="text-left">
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                </div>
                            </div>
                            <div class="col-md-6"><h6 class="text-right price">Rs. 500000</h6></div>
                           </div>
                           <!-- <div class="row">
                               <div class="col-md-6"> 
                                   <button class="btn btn-outline-danger">Add To Cart</button>
                               </div>
                               <div class="col-md-6">
                                   <button class="btn btn-outline-secondary text-white">Buy Now</button>
                               </div>
                           </div> -->
                        </div>
                    </div>
                  </div> 
                  
                <div class="wg-box-content shadow mb-2">
                    <div class="shadow rounded">
                          <img class="wg-box-content-image" style="height: 200px;" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                        <div class="p-1 pt-3">
                            <h6 class="text-left underline text-dark text-bold"><u>This is name</u></h6>
                           <div class="row">
                            <div class="col-md-6">
                                <div class="text-left">
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                    <span class="fa fa-star small-font"></span>
                                </div>
                            </div>
                            <div class="col-md-6"><h6 class="text-right price">Rs. 500000</h6></div>
                           </div>
                           <!-- <div class="row">
                               <div class="col-md-6"> 
                                   <button class="btn btn-outline-danger">Add To Cart</button>
                               </div>
                               <div class="col-md-6">
                                   <button class="btn btn-outline-secondary text-white">Buy Now</button>
                               </div>
                           </div> -->
                        </div>
                    </div>
                  </div> 
                   
                  </div>                
            </section>
        </div>
    </div>
    <!-- Product Sliders Ends -->

     <!-- Cards Start -->
     <div class="p-2">
        <div class="row m-2">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body p-0 card-shadow">
                        <img  style="height: 230px; width: 100%;" class="img-responsive round" src="https://www.freedigitalphotos.net/images/img/homepage/394230.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body p-0">
                        <img  style="height: 230px; width: 100%;" class="img-responsive round" src="https://www.freedigitalphotos.net/images/img/homepage/394230.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body p-0">
                        <img  style="height: 230px; width: 100%;" class="img-responsive round" src="https://www.freedigitalphotos.net/images/img/homepage/394230.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cards Ends -->


     <!-- Product Sliders Start -->
     <div class="light-grey p-2">
        <div class="card p-4">
            <h5 class="ml-4 font-weight-bold">Top Products</h5>
        <section class="responsive slider m-auto mt-4">
            <div class="wg-box-content shadow mb-2">
                <div class="shadow rounded">
                      <img class="wg-box-content-image" style="height: 200px;" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                    <div class="p-1 pt-3">
                        <h6 class="text-left underline text-dark text-bold"><u>This is name</u></h6>
                       <div class="row">
                        <div class="col-md-6">
                            <div class="text-left">
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                            </div>
                        </div>
                        <div class="col-md-6"><h6 class="text-right price">Rs. 500000</h6></div>
                       </div>
                       <!-- <div class="row">
                           <div class="col"> 
                               <button class="btn btn-outline-danger btn-block">Add To Cart</button>
                           </div>
                           <div class="col">
                               <button class="btn btn-danger"><span class="fa fa-heart"></span></button>
                           </div>
                       </div> -->
                    </div>
                </div>
              </div> 
              <div class="wg-box-content shadow mb-2">
                <div class="shadow rounded">
                      <img class="wg-box-content-image" style="height: 200px;" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                    <div class="p-1 pt-3">
                        <h6 class="text-left underline text-dark text-bold"><u>This is name</u></h6>
                       <div class="row">
                        <div class="col-md-6">
                            <div class="text-left">
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                            </div>
                        </div>
                        <div class="col-md-6"><h6 class="text-right price">Rs. 500000</h6></div>
                       </div>
                       <!-- <div class="row">
                           <div class="col"> 
                               <button class="btn btn-outline-danger btn-block">Add To Cart</button>
                           </div>
                           <div class="col">
                               <button class="btn btn-danger"><span class="fa fa-heart"></span></button>
                           </div>
                       </div> -->
                    </div>
                </div>
              </div> 
              <div class="wg-box-content shadow mb-2">
                <div class="shadow rounded">
                      <img class="wg-box-content-image" style="height: 200px;" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                    <div class="p-1 pt-3">
                        <h6 class="text-left underline text-dark text-bold"><u>This is name</u></h6>
                       <div class="row">
                        <div class="col-md-6">
                            <div class="text-left">
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                            </div>
                        </div>
                        <div class="col-md-6"><h6 class="text-right price">Rs. 500000</h6></div>
                       </div>
                       <!-- <div class="row">
                           <div class="col"> 
                               <button class="btn btn-outline-danger btn-block">Add To Cart</button>
                           </div>
                           <div class="col">
                               <button class="btn btn-danger"><span class="fa fa-heart"></span></button>
                           </div>
                       </div> -->
                    </div>
                </div>
              </div>                   
              <div class="wg-box-content shadow mb-2">
                <div class="shadow rounded">
                      <img class="wg-box-content-image" style="height: 200px;" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                    <div class="p-1 pt-3">
                        <h6 class="text-left underline text-dark text-bold"><u>This is name</u></h6>
                       <div class="row">
                        <div class="col-md-6">
                            <div class="text-left">
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                            </div>
                        </div>
                        <div class="col-md-6"><h6 class="text-right price">Rs. 500000</h6></div>
                       </div>
                       <!-- <div class="row">
                           <div class="col"> 
                               <button class="btn btn-outline-danger btn-block">Add To Cart</button>
                           </div>
                           <div class="col">
                               <button class="btn btn-danger"><span class="fa fa-heart"></span></button>
                           </div>
                       </div> -->
                    </div>
                </div>
              </div> 
              <div class="wg-box-content shadow mb-2">
                <div class="shadow rounded">
                      <img class="wg-box-content-image" style="height: 200px;" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                    <div class="p-1 pt-3">
                        <h6 class="text-left underline text-dark text-bold"><u>This is name</u></h6>
                       <div class="row">
                        <div class="col-md-6">
                            <div class="text-left">
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                            </div>
                        </div>
                        <div class="col-md-6"><h6 class="text-right price">Rs. 500000</h6></div>
                       </div>
                       <!-- <div class="row">
                           <div class="col"> 
                               <button class="btn btn-outline-danger btn-block">Add To Cart</button>
                           </div>
                           <div class="col">
                               <button class="btn btn-danger"><span class="fa fa-heart"></span></button>
                           </div>
                       </div> -->
                    </div>
                </div>
              </div> 
              <div class="wg-box-content shadow mb-2">
                <div class="shadow rounded">
                      <img class="wg-box-content-image" style="height: 200px;" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                    <div class="p-1 pt-3">
                        <h6 class="text-left underline text-dark text-bold"><u>This is name</u></h6>
                       <div class="row">
                        <div class="col-md-6">
                            <div class="text-left">
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                            </div>
                        </div>
                        <div class="col-md-6"><h6 class="text-right price">Rs. 500000</h6></div>
                       </div>
                       <!-- <div class="row">
                           <div class="col"> 
                               <button class="btn btn-outline-danger btn-block">Add To Cart</button>
                           </div>
                           <div class="col">
                               <button class="btn btn-danger"><span class="fa fa-heart"></span></button>
                           </div>
                       </div> -->
                    </div>
                </div>
              </div> 
              <div class="wg-box-content shadow mb-2">
                <div class="shadow rounded">
                      <img class="wg-box-content-image" style="height: 200px;" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                    <div class="p-1 pt-3">
                        <h6 class="text-left underline text-dark text-bold"><u>This is name</u></h6>
                       <div class="row">
                        <div class="col-md-6">
                            <div class="text-left">
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                            </div>
                        </div>
                        <div class="col-md-6"><h6 class="text-right price">Rs. 500000</h6></div>
                       </div>
                       <!-- <div class="row">
                           <div class="col"> 
                               <button class="btn btn-outline-danger btn-block">Add To Cart</button>
                           </div>
                           <div class="col">
                               <button class="btn btn-danger"><span class="fa fa-heart"></span></button>
                           </div>
                       </div> -->
                    </div>
                </div>
              </div> 
              <div class="wg-box-content shadow mb-2">
                <div class="shadow rounded">
                      <img class="wg-box-content-image" style="height: 200px;" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                    <div class="p-1 pt-3">
                        <h6 class="text-left underline text-dark text-bold"><u>This is name</u></h6>
                       <div class="row">
                        <div class="col-md-6">
                            <div class="text-left">
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                                <span class="fa fa-star small-font"></span>
                            </div>
                        </div>
                        <div class="col-md-6"><h6 class="text-right price">Rs. 500000</h6></div>
                       </div>
                       <!-- <div class="row">
                           <div class="col"> 
                               <button class="btn btn-outline-danger btn-block">Add To Cart</button>
                           </div>
                           <div class="col">
                               <button class="btn btn-danger"><span class="fa fa-heart"></span></button>
                           </div>
                       </div> -->
                    </div>
                </div>
              </div> 

          </section>
        </div>
    </div>
    <!-- Product Sliders Ends -->

    <div class="p-4">
        <h5 class="ml-4 font-weight-bold">Offers</h5>
        <div class="slider mt-4 m-auto p-4">
            <div class='single-item'>
                <div class="single-slide"><img class="slick-reg-img img-fluid" src="assets/images/7 slider.jpg"></div>
                <div class="single-slide"><img class="slick-reg-img img-fluid" src="assets/images/2 slider.jpg"></div>
                <div class="single-slide"><img class="slick-reg-img img-fluid" src="assets/images/3 slider.jpg"></div>
                <div class="single-slide"><img class="slick-reg-img img-fluid" src="assets/images/4 slider.jpg"></div>
            </div>  
        </div>
    </div>
    
@endsection