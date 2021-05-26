@extends('layouts.app')
@section('content')
 <section>
     <div class="col-12">
         <!-- Shop Top Area Start -->
         <div class="shop-top-bar d-flex">
             <!-- Left Side start -->
             <p><span>12</span> Product Found of <span>30</span></p>
             <!-- Left Side End -->
             <div class="shop-tab nav">
                 <a class="active" href="#shop-grid" data-bs-toggle="tab">
                     <i class="fa fa-th" aria-hidden="true"></i>
                 </a>
                 <a href="#shop-list" data-bs-toggle="tab">
                     <i class="fa fa-list" aria-hidden="true"></i>
                 </a>
             </div>
             <!-- Right Side Start -->
             <div class="select-shoing-wrap d-flex align-items-center">
                 <div class="shot-product">
                     <p>Sort By:</p>
                 </div>
                 <div class="shop-select">
                     <select class="shop-sort" style="display: none;">
                         <option data-display="Relevance">Relevance</option>
                         <option value="1"> Name, A to Z</option>
                         <option value="2"> Name, Z to A</option>
                         <option value="3"> Price, low to high</option>
                         <option value="4"> Price, high to low</option>
                     </select><div class="nice-select shop-sort" tabindex="0"><span class="current">Relevance</span><ul class="list"><li data-value="Relevance" data-display="Relevance" class="option selected">Relevance</li><li data-value="1" class="option"> Name, A to Z</li><li data-value="2" class="option"> Name, Z to A</li><li data-value="3" class="option"> Price, low to high</li><li data-value="4" class="option"> Price, high to low</li></ul></div>

                 </div>
             </div>
             <!-- Right Side End -->
         </div>
         <!-- Shop Top Area End -->

         <!-- Shop Bottom Area Start -->
         <div class="shop-bottom-area">

             <!-- Tab Content Area Start -->
             <div class="row">
                 <div class="col">
                     <div class="tab-content">
                         <div class="tab-pane fade show active" id="shop-grid">
                             <div class="row mb-n-30px">
                                 <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                     <!-- Single Prodect -->
                                     <div class="product">
                                         <div class="thumb">
                                             <a href="single-product.html" class="image">
                                                 <img src="assets/images/product-image/1.jpg" alt="Product">
                                                 <img class="hover-image" src="assets/images/product-image/1.jpg" alt="Product">
                                             </a>
                                             <span class="badges">
                                                            <span class="new">New</span>
                                                        </span>
                                             <div class="actions">
                                                 <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                 <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                 <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                             </div>
                                             <button title="Add To Cart" class=" add-to-cart">Add
                                                 To Cart</button>
                                         </div>
                                         <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num">( 5 Review )</span>
                                                        </span>
                                             <h5 class="title"><a href="single-product.html">Women's
                                                     Elizabeth Coat
                                                 </a>
                                             </h5>
                                             <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                                     <!-- Single Prodect -->
                                     <div class="product">
                                         <div class="thumb">
                                             <a href="single-product.html" class="image">
                                                 <img src="assets/images/product-image/2.jpg" alt="Product">
                                                 <img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product">
                                             </a>
                                             <span class="badges">
                                                            <span class="sale">-10%</span>
                                                            <span class="new">New</span>
                                                        </span>
                                             <div class="actions">
                                                 <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                 <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                 <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                             </div>
                                             <button title="Add To Cart" class=" add-to-cart">Add
                                                 To Cart</button>
                                         </div>
                                         <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 80%"></span>
                                                            </span>
                                                            <span class="rating-num">( 4 Review )</span>
                                                        </span>
                                             <h5 class="title"><a href="single-product.html">Ardene
                                                     Microfiber
                                                     Tights</a>
                                             </h5>
                                             <span class="price">
                                                            <span class="new">$38.50</span>
                                                            <span class="old">$48.50</span>
                                                        </span>
                                         </div>
                                     </div>
                                     <!-- Single Prodect -->
                                 </div>
                                 <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                     <!-- Single Prodect -->
                                     <div class="product">
                                         <div class="thumb">
                                             <a href="single-product.html" class="image">
                                                 <img src="assets/images/product-image/3.jpg" alt="Product">
                                                 <img class="hover-image" src="assets/images/product-image/3.jpg" alt="Product">
                                             </a>
                                             <span class="badges">
                                                            <span class="sale">-7%</span>
                                                        </span>
                                             <div class="actions">
                                                 <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                 <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                 <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                             </div>
                                             <button title="Add To Cart" class=" add-to-cart">Add
                                                 To Cart</button>
                                         </div>
                                         <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 0%"></span>
                                                            </span>
                                                            <span class="rating-num">( 0 Review )</span>
                                                        </span>
                                             <h5 class="title"><a href="single-product.html">Women's Long
                                                     Sleeve
                                                     Shirts</a></h5>
                                             <span class="price">
                                                            <span class="new">$30.50</span>
                                                            <span class="old">$38.00</span>
                                                        </span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                     <!-- Single Prodect -->
                                     <div class="product">
                                         <div class="thumb">
                                             <a href="single-product.html" class="image">
                                                 <img src="assets/images/product-image/4.jpg" alt="Product">
                                                 <img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product">
                                             </a>
                                             <span class="badges">
                                                            <span class="new">Sale</span>
                                                        </span>
                                             <div class="actions">
                                                 <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                 <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                 <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                             </div>
                                             <button title="Add To Cart" class=" add-to-cart">Add
                                                 To Cart</button>
                                         </div>
                                         <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 70%"></span>
                                                            </span>
                                                            <span class="rating-num">( 3.5 Review )</span>
                                                        </span>
                                             <h5 class="title"><a href="single-product.html">Parrera
                                                     Sunglasses -
                                                     Lomashop</a></h5>
                                             <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                         </div>
                                     </div>
                                     <!-- Single Prodect -->
                                 </div>
                                 <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                     <!-- Single Prodect -->
                                     <div class="product">
                                         <div class="thumb">
                                             <a href="single-product.html" class="image">
                                                 <img src="assets/images/product-image/5.jpg" alt="Product">
                                                 <img class="hover-image" src="assets/images/product-image/5.jpg" alt="Product">
                                             </a>
                                             <span class="badges">
                                                            <span class="sale">-5%</span>
                                                            <span class="new">New</span>
                                                        </span>
                                             <div class="actions">
                                                 <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                 <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                 <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                             </div>
                                             <button title="Add To Cart" class=" add-to-cart">Add
                                                 To Cart</button>
                                         </div>
                                         <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num">( 5 Review )</span>
                                                        </span>
                                             <h5 class="title"><a href="single-product.html">Cool Man
                                                     Wearing
                                                     Leather</a></h5>
                                             <span class="price">
                                                            <span class="new">$38.50</span>
                                                            <span class="old">$40.50</span>
                                                        </span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6 col-xs-6  mb-30px" data-aos="fade-up" data-aos-delay="400">
                                     <!-- Single Prodect -->
                                     <div class="product">
                                         <div class="thumb">
                                             <a href="single-product.html" class="image">
                                                 <img src="assets/images/product-image/6.jpg" alt="Product">
                                                 <img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product">
                                             </a>
                                             <span class="badges">
                                                        </span>
                                             <div class="actions">
                                                 <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                 <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                 <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                             </div>
                                             <button title="Add To Cart" class=" add-to-cart">Add
                                                 To Cart</button>
                                         </div>
                                         <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num">( 5 Review )</span>
                                                        </span>
                                             <h5 class="title"><a href="single-product.html">Portrait Of A
                                                     Young
                                                     Stylish</a>
                                             </h5>
                                             <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                         </div>
                                     </div>
                                     <!-- Single Prodect -->
                                 </div>
                                 <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                     <!-- Single Prodect -->
                                     <div class="product">
                                         <div class="thumb">
                                             <a href="single-product.html" class="image">
                                                 <img src="assets/images/product-image/7.jpg" alt="Product">
                                                 <img class="hover-image" src="assets/images/product-image/7.jpg" alt="Product">
                                             </a>
                                             <span class="badges">
                                                        </span>
                                             <div class="actions">
                                                 <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                 <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                 <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                             </div>
                                             <button title="Add To Cart" class=" add-to-cart">Add
                                                 To Cart</button>
                                         </div>
                                         <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 80%"></span>
                                                            </span>
                                                            <span class="rating-num">( 4 Review )</span>
                                                        </span>
                                             <h5 class="title"><a href="single-product.html">Men's Fashion
                                                     Leather
                                                     Bag</a></h5>
                                             <span class="price">
                                                            <span class="new">$30.50</span>
                                                        </span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                     <!-- Single Prodect -->
                                     <div class="product">
                                         <div class="thumb">
                                             <a href="single-product.html" class="image">
                                                 <img src="assets/images/product-image/8.jpg" alt="Product">
                                                 <img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product">
                                             </a>
                                             <span class="badges">
                                                            <span class="new">Sale</span>
                                                        </span>
                                             <div class="actions">
                                                 <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                 <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                 <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                             </div>
                                             <button title="Add To Cart" class=" add-to-cart">Add
                                                 To Cart</button>
                                         </div>
                                         <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 60%"></span>
                                                            </span>
                                                            <span class="rating-num">( 3 Review )</span>
                                                        </span>
                                             <h5 class="title"><a href="single-product.html">Long sleeve
                                                     knee
                                                     length</a></h5>
                                             <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                         </div>
                                     </div>
                                     <!-- Single Prodect -->
                                 </div>
                                 <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                     <!-- Single Prodect -->
                                     <div class="product">
                                         <div class="thumb">
                                             <a href="single-product.html" class="image">
                                                 <img src="assets/images/product-image/9.jpg" alt="Product">
                                                 <img class="hover-image" src="assets/images/product-image/9.jpg" alt="Product">
                                             </a>
                                             <span class="badges">
                                                            <span class="new">Sale</span>
                                                        </span>
                                             <div class="actions">
                                                 <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                 <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                 <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                             </div>
                                             <button title="Add To Cart" class=" add-to-cart">Add
                                                 To Cart</button>
                                         </div>
                                         <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 60%"></span>
                                                            </span>
                                                            <span class="rating-num">( 3 Review )</span>
                                                        </span>
                                             <h5 class="title"><a href="single-product.html">Long sleeve
                                                     knee
                                                     length</a></h5>
                                             <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                         </div>
                                     </div>
                                     <!-- Single Prodect -->
                                 </div>

                                 <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                     <!-- Single Prodect -->
                                     <div class="product">
                                         <div class="thumb">
                                             <a href="single-product.html" class="image">
                                                 <img src="assets/images/product-image/1.jpg" alt="Product">
                                                 <img class="hover-image" src="assets/images/product-image/1.jpg" alt="Product">
                                             </a>
                                             <span class="badges">
                                                            <span class="new">New</span>
                                                        </span>
                                             <div class="actions">
                                                 <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                 <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                 <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                             </div>
                                             <button title="Add To Cart" class=" add-to-cart">Add
                                                 To Cart</button>
                                         </div>
                                         <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num">( 5 Review )</span>
                                                        </span>
                                             <h5 class="title"><a href="single-product.html">Women's
                                                     Elizabeth Coat
                                                 </a>
                                             </h5>
                                             <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                                     <!-- Single Prodect -->
                                     <div class="product">
                                         <div class="thumb">
                                             <a href="single-product.html" class="image">
                                                 <img src="assets/images/product-image/2.jpg" alt="Product">
                                                 <img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product">
                                             </a>
                                             <span class="badges">
                                                            <span class="sale">-10%</span>
                                                            <span class="new">New</span>
                                                        </span>
                                             <div class="actions">
                                                 <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                 <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                 <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                             </div>
                                             <button title="Add To Cart" class=" add-to-cart">Add
                                                 To Cart</button>
                                         </div>
                                         <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 80%"></span>
                                                            </span>
                                                            <span class="rating-num">( 4 Review )</span>
                                                        </span>
                                             <h5 class="title"><a href="single-product.html">Ardene
                                                     Microfiber
                                                     Tights</a>
                                             </h5>
                                             <span class="price">
                                                            <span class="new">$38.50</span>
                                                            <span class="old">$48.50</span>
                                                        </span>
                                         </div>
                                     </div>
                                     <!-- Single Prodect -->
                                 </div>
                                 <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                     <!-- Single Prodect -->
                                     <div class="product">
                                         <div class="thumb">
                                             <a href="single-product.html" class="image">
                                                 <img src="assets/images/product-image/3.jpg" alt="Product">
                                                 <img class="hover-image" src="assets/images/product-image/3.jpg" alt="Product">
                                             </a>
                                             <span class="badges">
                                                            <span class="sale">-7%</span>
                                                        </span>
                                             <div class="actions">
                                                 <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                 <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                 <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                             </div>
                                             <button title="Add To Cart" class=" add-to-cart">Add
                                                 To Cart</button>
                                         </div>
                                         <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 0%"></span>
                                                            </span>
                                                            <span class="rating-num">( 0 Review )</span>
                                                        </span>
                                             <h5 class="title"><a href="single-product.html">Women's Long
                                                     Sleeve
                                                     Shirts</a></h5>
                                             <span class="price">
                                                            <span class="new">$30.50</span>
                                                            <span class="old">$38.00</span>
                                                        </span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="tab-pane fade" id="shop-list">
                             <div class="shop-list-wrapper">
                                 <div class="row">
                                     <div class="col-md-5 col-lg-5 col-xl-4">
                                         <div class="product">
                                             <div class="thumb">
                                                 <a href="single-product.html" class="image">
                                                     <img src="assets/images/product-image/1.jpg" alt="Product">
                                                     <img class="hover-image" src="assets/images/product-image/1.jpg" alt="Product">
                                                 </a>
                                                 <span class="badges">
                                                                <span class="new">New</span>
                                                            </span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-7 col-lg-7 col-xl-8">
                                         <div class="content-desc-wrap">
                                             <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 100%"></span>
                                                                </span>
                                                                <span class="rating-num">( 5 Review )</span>
                                                            </span>
                                                 <h5 class="title"><a href="single-product.html">Women's
                                                         Elizabeth Coat</a></h5>
                                                 <p>More room to move.With 80GB or 160GB of storage and up to
                                                     40 hours of battery life, the new iPod classic lets you
                                                     enjoy up to 40,000 songs or..</p>
                                             </div>
                                             <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                 <div class="actions">
                                                     <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                     <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                     <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                 </div>
                                                 <button title="Add To Cart" class=" add-to-cart">Add
                                                     To Cart</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="shop-list-wrapper">
                                 <div class="row">
                                     <div class="col-md-5 col-lg-5 col-xl-4">
                                         <div class="product">
                                             <div class="thumb">
                                                 <a href="single-product.html" class="image">
                                                     <img src="assets/images/product-image/2.jpg" alt="Product">
                                                     <img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product">
                                                 </a>
                                                 <span class="badges">
                                                                <span class="sale">-10%</span>
                                                                <span class="new">New</span>
                                                            </span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-7 col-lg-7 col-xl-8">
                                         <div class="content-desc-wrap">
                                             <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 80%"></span>
                                                                </span>
                                                                <span class="rating-num">( 4 Review )</span>
                                                            </span>
                                                 <h5 class="title"><a href="single-product.html">Ardene
                                                         Microfiber
                                                         Tights</a>
                                                 </h5>
                                                 <p>More room to move.With 80GB or 160GB of storage and up to
                                                     40 hours of battery life, the new iPod classic lets you
                                                     enjoy up to 40,000 songs or..</p>
                                             </div>
                                             <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                                <span class="old">$48.50</span>
                                                            </span>
                                                 <div class="actions">
                                                     <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                     <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                     <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                 </div>
                                                 <button title="Add To Cart" class=" add-to-cart">Add
                                                     To Cart</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="shop-list-wrapper">
                                 <div class="row">
                                     <div class="col-md-5 col-lg-5 col-xl-4">
                                         <div class="product">
                                             <div class="thumb">
                                                 <a href="single-product.html" class="image">
                                                     <img src="assets/images/product-image/3.jpg" alt="Product">
                                                     <img class="hover-image" src="assets/images/product-image/3.jpg" alt="Product">
                                                 </a>
                                                 <span class="badges">
                                                                <span class="sale">-7%</span>
                                                            </span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-7 col-lg-7 col-xl-8">
                                         <div class="content-desc-wrap">
                                             <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 0%"></span>
                                                                </span>
                                                                <span class="rating-num">( 0 Review )</span>
                                                            </span>
                                                 <h5 class="title"><a href="single-product.html">Women's Long
                                                         Sleeve
                                                         Shirts</a></h5>
                                                 <p>More room to move.With 80GB or 160GB of storage and up to
                                                     40 hours of battery life, the new iPod classic lets you
                                                     enjoy up to 40,000 songs or..</p>
                                             </div>
                                             <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                                <span class="old">$45.00</span>
                                                            </span>
                                                 <div class="actions">
                                                     <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                     <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                     <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                 </div>
                                                 <button title="Add To Cart" class=" add-to-cart">Add
                                                     To Cart</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="shop-list-wrapper">
                                 <div class="row">
                                     <div class="col-md-5 col-lg-5 col-xl-4">
                                         <div class="product">
                                             <div class="thumb">
                                                 <a href="single-product.html" class="image">
                                                     <img src="assets/images/product-image/4.jpg" alt="Product">
                                                     <img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product">
                                                 </a>
                                                 <span class="badges">
                                                                <span class="new">Sale</span>
                                                            </span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-7 col-lg-7 col-xl-8">
                                         <div class="content-desc-wrap">
                                             <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 70%"></span>
                                                                </span>
                                                                <span class="rating-num">( 3.5 Review )</span>
                                                            </span>
                                                 <h5 class="title"><a href="single-product.html">Parrera
                                                         Sunglasses -
                                                         Lomashop</a></h5>
                                                 <p>More room to move.With 80GB or 160GB of storage and up to
                                                     40 hours of battery life, the new iPod classic lets you
                                                     enjoy up to 40,000 songs or..</p>
                                             </div>
                                             <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                 <div class="actions">
                                                     <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                     <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                     <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                 </div>
                                                 <button title="Add To Cart" class=" add-to-cart">Add
                                                     To Cart</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="shop-list-wrapper">
                                 <div class="row">
                                     <div class="col-md-5 col-lg-5 col-xl-4">
                                         <div class="product">
                                             <div class="thumb">
                                                 <a href="single-product.html" class="image">
                                                     <img src="assets/images/product-image/5.jpg" alt="Product">
                                                     <img class="hover-image" src="assets/images/product-image/5.jpg" alt="Product">
                                                 </a>
                                                 <span class="badges">
                                                                <span class="sale">-5%</span>
                                                                <span class="new">New</span>
                                                            </span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-7 col-lg-7 col-xl-8">
                                         <div class="content-desc-wrap">
                                             <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 100%"></span>
                                                                </span>
                                                                <span class="rating-num">( 5 Review )</span>
                                                            </span>
                                                 <h5 class="title"><a href="single-product.html">Cool Man
                                                         Wearing
                                                         Leather</a></h5>
                                                 <p>More room to move.With 80GB or 160GB of storage and up to
                                                     40 hours of battery life, the new iPod classic lets you
                                                     enjoy up to 40,000 songs or..</p>
                                             </div>
                                             <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                                <span class="old">$45.50</span>
                                                            </span>
                                                 <div class="actions">
                                                     <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                     <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                     <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                 </div>
                                                 <button title="Add To Cart" class=" add-to-cart">Add
                                                     To Cart</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="shop-list-wrapper">
                                 <div class="row">
                                     <div class="col-md-5 col-lg-5 col-xl-4">
                                         <div class="product">
                                             <div class="thumb">
                                                 <a href="single-product.html" class="image">
                                                     <img src="assets/images/product-image/6.jpg" alt="Product">
                                                     <img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product">
                                                 </a>
                                                 <span class="badges">
                                                            </span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-7 col-lg-7 col-xl-8">
                                         <div class="content-desc-wrap">
                                             <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 100%"></span>
                                                                </span>
                                                                <span class="rating-num">( 5 Review )</span>
                                                            </span>
                                                 <h5 class="title"><a href="single-product.html">Portrait Of A
                                                         Young
                                                         Stylish</a>
                                                     <p>More room to move.With 80GB or 160GB of storage and up to
                                                         40 hours of battery life, the new iPod classic lets you
                                                         enjoy up to 40,000 songs or..</p>
                                                 </h5></div>
                                             <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                 <div class="actions">
                                                     <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                     <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                     <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                 </div>
                                                 <button title="Add To Cart" class=" add-to-cart">Add
                                                     To Cart</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="shop-list-wrapper">
                                 <div class="row">
                                     <div class="col-md-5 col-lg-5 col-xl-4">
                                         <div class="product">
                                             <div class="thumb">
                                                 <a href="single-product.html" class="image">
                                                     <img src="assets/images/product-image/7.jpg" alt="Product">
                                                     <img class="hover-image" src="assets/images/product-image/7.jpg" alt="Product">
                                                 </a>
                                                 <span class="badges">
                                                            </span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-7 col-lg-7 col-xl-8">
                                         <div class="content-desc-wrap">
                                             <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 80%"></span>
                                                                </span>
                                                                <span class="rating-num">( 4 Review )</span>
                                                            </span>
                                                 <h5 class="title"><a href="single-product.html">Men's Fashion
                                                         Leather
                                                         Bag</a></h5>
                                                 <p>More room to move.With 80GB or 160GB of storage and up to
                                                     40 hours of battery life, the new iPod classic lets you
                                                     enjoy up to 40,000 songs or..</p>
                                             </div>
                                             <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                 <div class="actions">
                                                     <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                     <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                     <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                 </div>
                                                 <button title="Add To Cart" class=" add-to-cart">Add
                                                     To Cart</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="shop-list-wrapper">
                                 <div class="row">
                                     <div class="col-md-5 col-lg-5 col-xl-4">
                                         <div class="product">
                                             <div class="thumb">
                                                 <a href="single-product.html" class="image">
                                                     <img src="assets/images/product-image/8.jpg" alt="Product">
                                                     <img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product">
                                                 </a>
                                                 <span class="badges">
                                                                <span class="new">Sale</span>
                                                            </span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-7 col-lg-7 col-xl-8">
                                         <div class="content-desc-wrap">
                                             <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 60%"></span>
                                                                </span>
                                                                <span class="rating-num">( 3 Review )</span>
                                                            </span>
                                                 <h5 class="title"><a href="single-product.html">Long sleeve
                                                         knee
                                                         length</a></h5>
                                                 <p>More room to move.With 80GB or 160GB of storage and up to
                                                     40 hours of battery life, the new iPod classic lets you
                                                     enjoy up to 40,000 songs or..</p>
                                             </div>
                                             <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                 <div class="actions">
                                                     <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                     <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                     <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                 </div>
                                                 <button title="Add To Cart" class=" add-to-cart">Add
                                                     To Cart</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="shop-list-wrapper">
                                 <div class="row">
                                     <div class="col-md-5 col-lg-5 col-xl-4">
                                         <div class="product">
                                             <div class="thumb">
                                                 <a href="single-product.html" class="image">
                                                     <img src="assets/images/product-image/9.jpg" alt="Product">
                                                     <img class="hover-image" src="assets/images/product-image/9.jpg" alt="Product">
                                                 </a>
                                                 <span class="badges">
                                                                <span class="new">Sale</span>
                                                            </span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-7 col-lg-7 col-xl-8">
                                         <div class="content-desc-wrap">
                                             <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 60%"></span>
                                                                </span>
                                                                <span class="rating-num">( 3 Review )</span>
                                                            </span>
                                                 <h5 class="title"><a href="single-product.html">Ardene Microfiber
                                                         Tights</a></h5>
                                                 <p>More room to move.With 80GB or 160GB of storage and up to
                                                     40 hours of battery life, the new iPod classic lets you
                                                     enjoy up to 40,000 songs or..</p>
                                             </div>
                                             <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                 <div class="actions">
                                                     <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                     <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                     <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                 </div>
                                                 <button title="Add To Cart" class=" add-to-cart">Add
                                                     To Cart</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Tab Content Area End -->

             <!--  Pagination Area Start -->
             <div class="load-more-items text-center mt-30px0px" data-aos="fade-up">
                 <a href="#" class="btn btn-lg btn-primary btn-hover-dark m-auto"> Load More <i class="fa fa-refresh ml-15px" aria-hidden="true"></i></a>
             </div>
             <!--  Pagination Area End -->
         </div>
         <!-- Shop Bottom Area End -->
     </div>
 </section>
@endsection
