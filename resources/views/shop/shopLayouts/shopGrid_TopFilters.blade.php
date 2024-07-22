@extends('layout.master')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom d-none d-md-flex">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">Shop Grid Filter On Top</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="javascript:;">Shop</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Shop Grid Filter Top</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!--end breadcrumb-->
        <!--start shop area-->
        <section class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="product-wrapper">
                            <div class="toolbox d-lg-flex align-items-center mb-3 gap-2 p-3 bg-dark-1">
                                <div class="d-flex flex-wrap flex-grow-1 gap-1">
                                    <div class="">
                                        <select class="form-select rounded-0">
                                            <option selected="selected">Size</option>
                                            <option>Small</option>
                                            <option>Small</option>
                                            <option>Small</option>
                                            <option>Extra Large</option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <select class="form-select rounded-0">
                                            <option selected="selected">Color</option>
                                            <option>Red</option>
                                            <option>Yellow</option>
                                            <option>Black</option>
                                            <option>White</option>
                                            <option>Green</option>
                                            <option>Blue</option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <select class="form-select rounded-0">
                                            <option selected="selected">Price</option>
                                            <option>$5 to $49</option>
                                            <option>$49 to $99</option>
                                            <option>$99 to $149</option>
                                            <option>$149 to $300</option>
                                            <option>$300 to $500</option>
                                            <option>Above $1000</option>
                                        </select>
                                    </div>
                                    <div class="d-flex align-items-center flex-nowrap">
                                        <select class="form-select rounded-0">
                                            <option value="menu_order" selected="selected">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <button type="button" class="btn btn-light rounded-0 text-uppercase">Search</button>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap">
                                    <div class="d-flex align-items-center flex-nowrap">
                                        <p class="mb-0 font-13 text-nowrap text-white">Show:</p>
                                        <select class="form-select ms-3 rounded-0">
                                            <option>9</option>
                                            <option>12</option>
                                            <option>16</option>
                                            <option>20</option>
                                            <option>50</option>
                                            <option>100</option>
                                        </select>
                                    </div>
                                </div>
                                <div>	<a href="/shopGrid_TopFilters" class="btn btn-white rounded-0"><i class='bx bxs-grid me-0'></i></a>
                                </div>
                                <div>	<a href="/shopList_TopFilters" class="btn btn-light rounded-0"><i class='bx bx-list-ul me-0'></i></a>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                                    <div class="col">
                                        <div class="card rounded-0 product-card">
                                            <div class="card-header bg-transparent border-bottom-0">
                                                <div class="d-flex align-items-center justify-content-end gap-3">
                                                    <a href="javascript:;">
                                                        <div class="product-compare"><span><i class="bx bx-git-compare"></i> Compare</span>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <img src="assets/images/products/01.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="javascript:;">
                                                        <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <h6 class="product-name mb-2">Product Short Name</h6>
                                                    </a>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mb-1 product-price">	<span class="me-1 text-decoration-line-through">$99.00</span>
                                                            <span class="text-white fs-5">$49.00</span>
                                                        </div>
                                                        <div class="cursor-pointer ms-auto">	<i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="d-grid gap-2">
                                                            <a href="javascript:;" class="btn btn-light btn-ecomm">	<i class="bx bxs-cart-add"></i>Add to Cart</a>	<a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class="bx bx-zoom-in"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card rounded-0 product-card">
                                            <div class="card-header bg-transparent border-bottom-0">
                                                <div class="d-flex align-items-center justify-content-end gap-3">
                                                    <a href="javascript:;">
                                                        <div class="product-compare"><span><i class="bx bx-git-compare"></i> Compare</span>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <img src="assets/images/products/02.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="javascript:;">
                                                        <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <h6 class="product-name mb-2">Product Short Name</h6>
                                                    </a>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                            <span class="text-white fs-5">$49.00</span>
                                                        </div>
                                                        <div class="cursor-pointer ms-auto"> <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-light-4"></i>
                                                            <i class="bx bxs-star text-light-4"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="d-grid gap-2">
                                                            <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class="bx bxs-cart-add"></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm"><i class="bx bx-zoom-in"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card rounded-0 product-card">
                                            <div class="card-header bg-transparent border-bottom-0">
                                                <div class="d-flex align-items-center justify-content-end gap-3">
                                                    <a href="javascript:;">
                                                        <div class="product-compare"><span><i class="bx bx-git-compare"></i> Compare</span>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <img src="assets/images/products/03.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="javascript:;">
                                                        <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <h6 class="product-name mb-2">Product Short Name</h6>
                                                    </a>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                            <span class="text-white fs-5">$49.00</span>
                                                        </div>
                                                        <div class="cursor-pointer ms-auto"> <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-light-4"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="d-grid gap-2">
                                                            <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class="bx bxs-cart-add"></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm"><i class="bx bx-zoom-in"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card rounded-0 product-card">
                                            <div class="card-header bg-transparent border-bottom-0">
                                                <div class="d-flex align-items-center justify-content-end gap-3">
                                                    <a href="javascript:;">
                                                        <div class="product-compare"><span><i class="bx bx-git-compare"></i> Compare</span>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <img src="assets/images/products/04.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="javascript:;">
                                                        <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <h6 class="product-name mb-2">Product Short Name</h6>
                                                    </a>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                            <span class="text-white fs-5">$49.00</span>
                                                        </div>
                                                        <div class="cursor-pointer ms-auto"> <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="d-grid gap-2">
                                                            <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class="bx bxs-cart-add"></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm"><i class="bx bx-zoom-in"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card rounded-0 product-card">
                                            <div class="card-header bg-transparent border-bottom-0">
                                                <div class="d-flex align-items-center justify-content-end gap-3">
                                                    <a href="javascript:;">
                                                        <div class="product-compare"><span><i class="bx bx-git-compare"></i> Compare</span>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <img src="assets/images/products/05.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="javascript:;">
                                                        <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <h6 class="product-name mb-2">Product Short Name</h6>
                                                    </a>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                            <span class="text-white fs-5">$49.00</span>
                                                        </div>
                                                        <div class="cursor-pointer ms-auto"> <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-light-4"></i>
                                                            <i class="bx bxs-star text-light-4"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="d-grid gap-2">
                                                            <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class="bx bxs-cart-add"></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm"><i class="bx bx-zoom-in"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card rounded-0 product-card">
                                            <div class="card-header bg-transparent border-bottom-0">
                                                <div class="d-flex align-items-center justify-content-end gap-3">
                                                    <a href="javascript:;">
                                                        <div class="product-compare"><span><i class="bx bx-git-compare"></i> Compare</span>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <img src="assets/images/products/06.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="javascript:;">
                                                        <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <h6 class="product-name mb-2">Product Short Name</h6>
                                                    </a>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                            <span class="text-white fs-5">$49.00</span>
                                                        </div>
                                                        <div class="cursor-pointer ms-auto"> <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="d-grid gap-2">
                                                            <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class="bx bxs-cart-add"></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm"><i class="bx bx-zoom-in"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card rounded-0 product-card">
                                            <div class="card-header bg-transparent border-bottom-0">
                                                <div class="d-flex align-items-center justify-content-end gap-3">
                                                    <a href="javascript:;">
                                                        <div class="product-compare"><span><i class="bx bx-git-compare"></i> Compare</span>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <img src="assets/images/products/07.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="javascript:;">
                                                        <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <h6 class="product-name mb-2">Product Short Name</h6>
                                                    </a>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                            <span class="text-white fs-5">$49.00</span>
                                                        </div>
                                                        <div class="cursor-pointer ms-auto"> <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-light-4"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="d-grid gap-2">
                                                            <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class="bx bxs-cart-add"></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm"><i class="bx bx-zoom-in"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card rounded-0 product-card">
                                            <div class="card-header bg-transparent border-bottom-0">
                                                <div class="d-flex align-items-center justify-content-end gap-3">
                                                    <a href="javascript:;">
                                                        <div class="product-compare"><span><i class="bx bx-git-compare"></i> Compare</span>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <img src="assets/images/products/08.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="javascript:;">
                                                        <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <h6 class="product-name mb-2">Product Short Name</h6>
                                                    </a>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                            <span class="text-white fs-5">$49.00</span>
                                                        </div>
                                                        <div class="cursor-pointer ms-auto"> <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="d-grid gap-2">
                                                            <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class="bx bxs-cart-add"></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm"><i class="bx bx-zoom-in"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card rounded-0 product-card">
                                            <div class="card-header bg-transparent border-bottom-0">
                                                <div class="d-flex align-items-center justify-content-end gap-3">
                                                    <a href="javascript:;">
                                                        <div class="product-compare"><span><i class="bx bx-git-compare"></i> Compare</span>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <img src="assets/images/products/09.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="javascript:;">
                                                        <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <h6 class="product-name mb-2">Product Short Name</h6>
                                                    </a>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                            <span class="text-white fs-5">$49.00</span>
                                                        </div>
                                                        <div class="cursor-pointer ms-auto"> <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                            <i class="bx bxs-star text-white"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="d-grid gap-2">
                                                            <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class="bx bxs-cart-add"></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm"><i class="bx bx-zoom-in"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                            <hr>
                            <nav class="d-flex justify-content-between" aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="javascript:;"><i class='bx bx-chevron-left'></i> Prev</a>
                                    </li>
                                </ul>
                                <ul class="pagination">
                                    <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span>
                                    </li>
                                    <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">2</a>
                                    </li>
                                    <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">3</a>
                                    </li>
                                    <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">4</a>
                                    </li>
                                    <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">5</a>
                                    </li>
                                </ul>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="javascript:;" aria-label="Next">Next <i class='bx bx-chevron-right'></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
        <!--end shop area-->
    </div>
</div>
@endsection