@extends('layout.master')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom d-none d-md-flex">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">Shop Categories</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="javascript:;">Shop</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Shop Categories</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!--end breadcrumb-->
        <!--start shop categories-->
        <section class="py-4">
            <div class="container">
                <div class="product-categories">
                    <div class="row row-cols-1 row-cols-lg-4">
                        <div class="col">
                            <div class="card rounded-0 product-card">
                                <a href="javascript:;">
                                    <img src="assets/images/shop-categories/01.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                </a>
                                <div class="list-group list-group-flush">
                                    <a href="javascript:;" class="list-group-item bg-transparent">
                                        <h6 class="mb-0 text-uppercase">Clothing</h6>
                                    </a>	<a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                    Blazers & Suits
                                  <span class="badge bg-light rounded-pill">14</span>
                                </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                    Dresses
                                  <span class="badge bg-light rounded-pill">2</span>
                                </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                    Sportswear
                                  <span class="badge bg-light rounded-pill">1</span>
                                </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                    Hoodie & Sweatshirts
                                  <span class="badge bg-light rounded-pill">1</span>
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card rounded-0 product-card">
                                <a href="javascript:;">
                                    <img src="assets/images/shop-categories/02.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                </a>
                                <div class="list-group list-group-flush">
                                    <a href="javascript:;" class="list-group-item bg-transparent">
                                        <h6 class="mb-0 text-uppercase">Accessories</h6>
                                    </a> <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                  Bags
                                <span class="badge bg-light rounded-pill">14</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Sunglasses
                                <span class="badge bg-light rounded-pill">22</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Jewelry
                                <span class="badge bg-light rounded-pill">14</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Cosmetics
                                <span class="badge bg-light rounded-pill">12</span>
                              </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card rounded-0 product-card">
                                <a href="javascript:;">
                                    <img src="assets/images/shop-categories/03.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                </a>
                                <div class="list-group list-group-flush">
                                    <a href="javascript:;" class="list-group-item bg-transparent">
                                        <h6 class="mb-0 text-uppercase">Shoes</h6>
                                    </a> <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Sandals
                                <span class="badge bg-light rounded-pill">14</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Boots
                                <span class="badge bg-light rounded-pill">20</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Ballerinas & Flats
                                <span class="badge bg-light rounded-pill">16</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Flip Flops
                                <span class="badge bg-light rounded-pill">18</span>
                              </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card rounded-0 product-card">
                                <a href="javascript:;">
                                    <img src="assets/images/shop-categories/04.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                </a>
                                <div class="list-group list-group-flush">
                                    <a href="javascript:;" class="list-group-item bg-transparent">
                                        <h6 class="mb-0 text-uppercase">Furniture</h6>
                                    </a> <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Tables
                                <span class="badge bg-light rounded-pill">14</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Office Chairs
                                <span class="badge bg-light rounded-pill">2</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Adjustable Height Desks
                                <span class="badge bg-light rounded-pill">1</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Lounge Seating
                                <span class="badge bg-light rounded-pill">1</span>
                              </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card rounded-0 product-card">
                                <a href="javascript:;">
                                    <img src="assets/images/shop-categories/05.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                </a>
                                <div class="list-group list-group-flush">
                                    <a href="javascript:;" class="list-group-item bg-transparent">
                                        <h6 class="mb-0 text-uppercase">Electronics</h6>
                                    </a> <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Mobiles
                                <span class="badge bg-light rounded-pill">25</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Laptops
                                <span class="badge bg-light rounded-pill">42</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Headphones
                                <span class="badge bg-light rounded-pill">14</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Computers & Accessories
                                <span class="badge bg-light rounded-pill">10</span>
                              </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card rounded-0 product-card">
                                <a href="javascript:;">
                                    <img src="assets/images/shop-categories/06.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                </a>
                                <div class="list-group list-group-flush">
                                    <a href="javascript:;" class="list-group-item bg-transparent">
                                        <h6 class="mb-0 text-uppercase">Makeup Kit</h6>
                                    </a> <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Skin & Eye Primer
                                <span class="badge bg-light rounded-pill">16</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Eyeshadow
                                <span class="badge bg-light rounded-pill">18</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Lipstick Palette
                                <span class="badge bg-light rounded-pill">26</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Excellent Brow
                                <span class="badge bg-light rounded-pill">16</span>
                              </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card rounded-0 product-card">
                                <a href="javascript:;">
                                    <img src="assets/images/shop-categories/07.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                </a>
                                <div class="list-group list-group-flush">
                                    <a href="javascript:;" class="list-group-item bg-transparent">
                                        <h6 class="mb-0 text-uppercase">Jewelry</h6>
                                    </a> <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Bridal
                                <span class="badge bg-light rounded-pill">25</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Fashion
                                <span class="badge bg-light rounded-pill">42</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Temple
                                <span class="badge bg-light rounded-pill">14</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Handmade
                                <span class="badge bg-light rounded-pill">10</span>
                              </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card rounded-0 product-card">
                                <a href="javascript:;">
                                    <img src="assets/images/shop-categories/08.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                </a>
                                <div class="list-group list-group-flush">
                                    <a href="javascript:;" class="list-group-item bg-transparent">
                                        <h6 class="mb-0 text-uppercase">Sports</h6>
                                    </a> <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Soccer/football
                                <span class="badge bg-light rounded-pill">12</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Badminton
                                <span class="badge bg-light rounded-pill">35</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Table Tennis
                                <span class="badge bg-light rounded-pill">10</span>
                              </a>
                                    <a href="javascript:;" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                Volleyball
                                <span class="badge bg-light rounded-pill">15</span>
                              </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </section>
        <!--end shop categories-->
        <!--start brand-->
        <section class="py-4">
            <div class="container">
                <div class="popular-brands">
                    <div class="text-center">
                        <h2 class="text-uppercase mb-0">Popular Brands</h2>
                        <hr>
                    </div>
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-xl-5">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <a href="javscript:;">
                                        <img src="assets/images/brands/01.png" class="img-fluid" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <a href="javscript:;">
                                        <img src="assets/images/brands/02.png" class="img-fluid" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <a href="javscript:;">
                                        <img src="assets/images/brands/03.png" class="img-fluid" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <a href="javscript:;">
                                        <img src="assets/images/brands/04.png" class="img-fluid" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <a href="javscript:;">
                                        <img src="assets/images/brands/05.png" class="img-fluid" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <a href="javscript:;">
                                        <img src="assets/images/brands/06.png" class="img-fluid" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <a href="javscript:;">
                                        <img src="assets/images/brands/07.png" class="img-fluid" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <a href="javscript:;">
                                        <img src="assets/images/brands/08.png" class="img-fluid" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <a href="javscript:;">
                                        <img src="assets/images/brands/09.png" class="img-fluid" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <a href="javscript:;">
                                        <img src="assets/images/brands/10.png" class="img-fluid" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <a href="javscript:;">
                                        <img src="assets/images/brands/11.png" class="img-fluid" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <a href="javscript:;">
                                        <img src="assets/images/brands/12.png" class="img-fluid" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <a href="javscript:;">
                                        <img src="assets/images/brands/13.png" class="img-fluid" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <a href="javscript:;">
                                        <img src="assets/images/brands/14.png" class="img-fluid" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <a href="javscript:;">
                                        <img src="assets/images/brands/15.png" class="img-fluid" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </section>
        <!--end brand-->
    </div>
</div>
@endsection