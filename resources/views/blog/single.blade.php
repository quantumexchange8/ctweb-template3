@extends('layout.master')

@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom d-none d-md-flex">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">Single Post</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="javascript:;">Blog</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Single Post</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!--end breadcrumb-->
        <!--start page content-->
        <section class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="blog-right-sidebar p-3">
                            <div class="card shadow-none bg-transparent">
                                <img src="assets/images/posts/01.png" class="card-img-top" alt="">
                                <div class="card-body p-0">
                                    <div class="list-inline mt-4">	<a href="javascript:;" class="list-inline-item"><i class='bx bx-user me-1'></i>By Admin</a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bx-comment-detail me-1'></i>16 Comments</a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bx-calendar me-1'></i>November 5, 2021</a>
                                    </div>
                                    <h4 class="mt-4">Post Title Here</h4>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                    <p>Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. Nulla aliquet turpis eget sodales scelerisque. Ut accumsan rhoncus sapien a dignissim. Sed vel ipsum nunc. Aliquam erat volutpat. Donec et dignissim elit. Etiam condimentum, ante sed rutrum auctor, quam arcu consequat massa, at gravida enim velit id nisl.</p>
                                    <p>Nullam non felis odio. Praesent aliquam magna est, nec volutpat quam aliquet non. Cras ut lobortis massa, a fringilla dolor. Quisque ornare est at felis consectetur mollis. Aliquam vitae metus et enim posuere ornare. Praesent sapien erat, pellentesque quis sollicitudin eget, imperdiet bibendum magna. Aenean sit amet odio est.</p>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris quis est lobortis odio dignissim rutrum. Pellentesque blandit lacinia diam, a tincidunt felis tempus eget.</p>
                                    <p>Donec egestas metus non vehicula accumsan. Pellentesque sit amet tempor nibh. Mauris in risus lorem. Cras malesuada gravida massa eget viverra. Suspendisse vitae dolor erat. Morbi id rhoncus enim. In hac habitasse platea dictumst. Aenean lorem diam, venenatis nec venenatis id, adipiscing ac massa. Nam vel dui eget justo dictum pretium a rhoncus ipsum. Donec venenatis erat tincidunt nunc suscipit, sit amet bibendum lacus posuere. Sed scelerisque, dolor a pharetra sodales, mi augue consequat sapien, et interdum tellus leo et nunc. Nunc imperdiet eu libero ut imperdiet.</p>
                                    <p>Nunc varius ornare tortor. In dignissim quam eget quam sodales egestas. Nullam imperdiet velit feugiat, egestas risus nec, rhoncus felis. Suspendisse sagittis enim aliquet augue consequat facilisis. Nunc sit amet eleifend tellus. Etiam rhoncus turpis quam. Vestibulum eu lacus mattis, dignissim justo vel, fermentum nulla. Donec pharetra augue eget diam dictum, eu ullamcorper arcu feugiat.</p>
                                    <p>Proin ut ante vitae magna cursus porta. Aenean rutrum faucibus augue eu convallis. Phasellus condimentum elit id cursus sodales. Vivamus nec est consectetur, tincidunt augue at, tempor libero.</p>
                                    <div class="d-flex align-items-center gap-2 py-4 border-top border-bottom">
                                        <div class="">
                                            <h6 class="mb-0 text-uppercase">Share This Post</h6>
                                        </div>
                                        <div class="list-inline blog-sharing">	<a href="javascript:;" class="list-inline-item"><i class='bx bxl-facebook'></i></a>
                                            <a href="javascript:;" class="list-inline-item"><i class='bx bxl-twitter'></i></a>
                                            <a href="javascript:;" class="list-inline-item"><i class='bx bxl-linkedin'></i></a>
                                            <a href="javascript:;" class="list-inline-item"><i class='bx bxl-instagram'></i></a>
                                            <a href="javascript:;" class="list-inline-item"><i class='bx bxl-tumblr'></i></a>
                                        </div>
                                    </div>
                                    <div class="author d-flex align-items-center gap-3 py-4">
                                        <img src="assets/images/avatars/avatar-1.png" alt="" width="80">
                                        <div class="">
                                            <h6 class="mb-0">Jhon Doe</h6>
                                            <p class="mb-0">Donec egestas metus non vehicula accumsan. Pellentesque sit amet tempor nibh. Mauris in risus lorem. Cras malesuada gravida massa eget viverra. Suspendisse vitae dolor erat. Morbi id rhoncus enim. In hac habitasse platea dictumst. Aenean lorem diam, venenatis nec venenatis id, adipiscing ac massa.</p>
                                        </div>
                                    </div>
                                    <div class="reply-form p-4 border bg-dark-1">
                                        <h6 class="mb-0">Leave a Reply</h6>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label">Comment</label>
                                                <textarea class="form-control" rows="4"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Website</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <button type="button" class="btn btn-light btn-ecomm">Post Comment</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <h5 class="text-uppercase mb-4">Latest Post</h5>
                                <div class="latest-news owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="card rounded-0 product-card border">
                                            <div class="news-date">
                                                <div class="date-number">24</div>
                                                <div class="date-month">FEB</div>
                                            </div>
                                            <a href="javascript:;">
                                                <img src="assets/images/blogs/01.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <div class="news-title">
                                                    <a href="javascript:;">
                                                        <h5 class="mb-3 text-capitalize">Blog Short Title</h5>
                                                    </a>
                                                </div>
                                                <p class="news-content mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
                                            </div>
                                            <div class="card-footer border-top">
                                                <a href="javascript:;">
                                                    <p class="mb-0"><small class="text-white">0 Comments</small>
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card rounded-0 product-card border">
                                            <div class="news-date">
                                                <div class="date-number">24</div>
                                                <div class="date-month">FEB</div>
                                            </div>
                                            <a href="javascript:;">
                                                <img src="assets/images/blogs/02.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <div class="news-title">
                                                    <a href="javascript:;">
                                                        <h5 class="mb-3 text-capitalize">Blog Short Title</h5>
                                                    </a>
                                                </div>
                                                
                                                <p class="news-content mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
                                            </div>
                                            <div class="card-footer border-top">
                                                <a href="javascript:;">
                                                    <p class="mb-0"><small class="text-white">0 Comments</small>
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card rounded-0 product-card border">
                                            <div class="news-date">
                                                <div class="date-number">24</div>
                                                <div class="date-month">FEB</div>
                                            </div>
                                            <a href="javascript:;">
                                                <img src="assets/images/blogs/03.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <div class="news-title">
                                                    <a href="javascript:;">
                                                        <h5 class="mb-3 text-capitalize">Blog Short Title</h5>
                                                    </a>
                                                </div>
                                                
                                                <p class="news-content mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
                                            </div>
                                            <div class="card-footer border-top">
                                                <a href="javascript:;">
                                                    <p class="mb-0"><small class="text-white">0 Comments</small>
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card rounded-0 product-card border">
                                            <div class="news-date">
                                                <div class="date-number">24</div>
                                                <div class="date-month">FEB</div>
                                            </div>
                                            <a href="javascript:;">
                                                <img src="assets/images/blogs/04.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <div class="news-title">
                                                    <a href="javascript:;">
                                                        <h5 class="mb-3 text-capitalize">Blog Short Title</h5>
                                                    </a>
                                                </div>
                                                <p class="news-content mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
                                            </div>
                                            <div class="card-footer border-top">
                                                <a href="javascript:;">
                                                    <p class="mb-0"><small class="text-white">0 Comments</small>
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card rounded-0 product-card border">
                                            <div class="news-date">
                                                <div class="date-number">24</div>
                                                <div class="date-month">FEB</div>
                                            </div>
                                            <a href="javascript:;">
                                                <img src="assets/images/blogs/05.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <div class="news-title">
                                                    <a href="javascript:;">
                                                        <h5 class="mb-3 text-capitalize">Blog Short Title</h5>
                                                    </a>
                                                </div>
                                                
                                                <p class="news-content mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
                                            </div>
                                            <div class="card-footer border-top">
                                                <a href="javascript:;">
                                                    <p class="mb-0"><small class="text-white">0 Comments</small>
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card rounded-0 product-card border">
                                            <div class="news-date">
                                                <div class="date-number">24</div>
                                                <div class="date-month">FEB</div>
                                            </div>
                                            <a href="javascript:;">
                                                <img src="assets/images/blogs/06.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <div class="news-title">
                                                    <a href="javascript:;">
                                                        <h5 class="mb-3 text-capitalize">Blog Short Title</h5>
                                                    </a>
                                                </div>
                                                
                                                <p class="news-content mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
                                            </div>
                                            <div class="card-footer border-top">
                                                <a href="javascript:;">
                                                    <p class="mb-0"><small class="text-white">0 Comments</small>
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="blog-left-sidebar p-3">
                            <form>
                                <div class="position-relative blog-search mb-3">
                                    <input type="text" class="form-control form-control-lg rounded-0 pe-5" placeholder="Serach posts here...">
                                    <div class="position-absolute top-50 end-0 translate-middle"><i class='bx bx-search fs-4 text-white'></i>
                                    </div>
                                </div>
                                <div class="blog-categories mb-3">
                                    <h5 class="mb-4">Blog Categories</h5>
                                    <div class="list-group list-group-flush"> <a href="javascript:;" class="list-group-item bg-transparent"><i class='bx bx-chevron-right me-1'></i> Fashion</a>
                                        <a href="javascript:;" class="list-group-item bg-transparent"><i class='bx bx-chevron-right me-1'></i> Electronis</a>
                                        <a href="javascript:;" class="list-group-item bg-transparent"><i class='bx bx-chevron-right me-1'></i> Accessories</a>
                                        <a href="javascript:;" class="list-group-item bg-transparent"><i class='bx bx-chevron-right me-1'></i> Kitchen & Table</a>
                                        <a href="javascript:;" class="list-group-item bg-transparent"><i class='bx bx-chevron-right me-1'></i> Furniture</a>
                                    </div>
                                </div>
                                <div class="blog-categories mb-3">
                                    <h5 class="mb-4">Recent Posts</h5>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/gallery/05.png" width="75" alt="">
                                        <div class="ms-3"> <a href="javascript:;" class="fs-6">Post title here</a>
                                            <p class="mb-0">March 15, 2021</p>
                                        </div>
                                    </div>
                                    <div class="my-3 border-bottom"></div>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/gallery/07.png" width="75" alt="">
                                        <div class="ms-3"> <a href="javascript:;" class="fs-6">Post title here</a>
                                            <p class="mb-0">March 15, 2021</p>
                                        </div>
                                    </div>
                                    <div class="my-3 border-bottom"></div>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/gallery/16.png" width="75" alt="">
                                        <div class="ms-3"> <a href="javascript:;" class="fs-6">Post title here</a>
                                            <p class="mb-0">March 15, 2021</p>
                                        </div>
                                    </div>
                                    <div class="my-3 border-bottom"></div>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/gallery/01.png" width="75" alt="">
                                        <div class="ms-3"> <a href="javascript:;" class="fs-6">Post title here</a>
                                            <p class="mb-0">March 15, 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-categories mb-3">
                                    <h5 class="mb-4">Popular Tags</h5>
                                    <div class="tags-box">	<a href="javascript:;" class="tag-link">Cloths</a>
                                        <a href="javascript:;" class="tag-link">Electronis</a>
                                        <a href="javascript:;" class="tag-link">Furniture</a>
                                        <a href="javascript:;" class="tag-link">Sports</a>
                                        <a href="javascript:;" class="tag-link">Men Wear</a>
                                        <a href="javascript:;" class="tag-link">Women Wear</a>
                                        <a href="javascript:;" class="tag-link">Laptops</a>
                                        <a href="javascript:;" class="tag-link">Formal Shirts</a>
                                        <a href="javascript:;" class="tag-link">Topwear</a>
                                        <a href="javascript:;" class="tag-link">Headphones</a>
                                        <a href="javascript:;" class="tag-link">Bottom Wear</a>
                                        <a href="javascript:;" class="tag-link">Bags</a>
                                        <a href="javascript:;" class="tag-link">Sofa</a>
                                        <a href="javascript:;" class="tag-link">Shoes</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
        <!--end start page content-->
    </div>
</div>
    
@endsection