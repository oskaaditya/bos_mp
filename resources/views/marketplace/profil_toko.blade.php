@extends('marketplace.layout.layout_profiltoko')

@section('content')

<!--Body Content-->
    <div id="page-content">
    	<!--Collection Banner-->
    	<div class="card-profil-toko card">
            <div class="card-body">
                {{-- <div class="row">
                    <div class="col md-12 flex">
                        <i class="fa fa-shopping-bag text-success mr-2"></i>
                        <h4 class="head-1 mr-5">Belanja</h4>
                        <h4 class="date mr-5">16 Januari 2022</h4>
                        <h4 class="status mr-5">Selesai</h4>
                        <h4 class="invoice">BP00001</h4>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-md-2 text-center">
                        <img class="profil-toko-photo" src="{{ asset('assets/marketplace/images/toko/logo_toko.jpg') }}" alt="produk">
                    </div>
                    <div class="col-md-5 mt-1">
                        <div class="detail-toko">
                            <p class="nama-toko">Bos Pangan</p>

                            <div class="kota-toko flex">
                                <i class="marker fa fa-map-marker-alt text-success mr-2"></i>
                                <h4 class="head-1 mr-2">Kota Blitar</h4>
                            </div>
                            <div class="alamat-toko flex">
                                <i class=""></i>

                                <h4 class="alamat mr-2">Jl Cimalaya No.13 ,Kecamatan Kepanjen Kidul ,
                                Kota Blitar , 66116
                                </h4>
                            </div>

                            <div class="tombol-toko text-left">
                                <a href="#" class="tombol1"><span><i class="fab fa-whatsapp mr-3"></i></span>Chat Penjual</a>
                                <a href="#" class="tombol2 ml-2" data-toggle="modal" data-target="#detail">Info Toko</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="modal fade bd-example-modal-md" id="detail" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="title-modal-detail ml-3">Info Toko</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="desc col-md-5 text-justify">
                                        <h4 class="desc_title">Deskripsi Toko</h4>
                                        <h4 class="desc_toko">Bos Pangan adalah sebuah start-up yang bergerak dibidang perpanganan, baik pangan untuk manusia, hewan, bahkan tumbuhan.</h4>
                                    </div>
                                    <div class="desc col-md-5">
                                        <h4 class="desc_title">Berdiri Sejak</h4>
                                        <h4 class="desc_toko">September 2021</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Collection Banner-->
        
        <div class="container">
        	<div class="row">
            	<!--Sidebar-->
            	<div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                	<div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                	<div class="sidebar_tags">
                    	<!--Categories-->
                    	<div class="sidebar_widget categories filter-widget">
                            <div class="widget-title"><h3>Kategori</h3></div>
                            <div class="widget-content">
                                <ul class="sidebar_categories">
                                    <li class="lvl-1"><a href="" class="site-nav">Makanan</a></li>
                                    <li class="lvl-1"><a href="" class="site-nav">Minuman</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Categories-->
                        
                    
                        <!--Information-->
                        <div class="sidebar_widget">
                            <div class="widget-title"><h3>Information</h3></div>
                            <div class="widget-content"><p>Use this text to share information about your brand with your customers. Describe a product, share announcements, or welcome customers to your store.</p></div>
                        </div>
                        <!--end Information-->
                        
                    </div>
                </div>
                <!--End Sidebar-->
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                	
                	<div class="productList product-load-more">
                    	<!--Toolbar-->
                        <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                    	<div class="toolbar">
                        	<div class="filters-toolbar-wrapper">
                            	<div class="row">
                                	<div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                    	
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                        
                                    	<span class="filters-toolbar__product-count">Showing: </span>
                                       
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 text-right">
                                    	<div class="filters-toolbar__item">
                                      		<label for="SortBy" class="hidden">Sort</label>
                                      		<select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                                <option value="title-ascending" selected="selected">Sort</option>
                                                <option>Best Selling</option>
                                                <option>Alphabetically, A-Z</option>
                                                <option>Alphabetically, Z-A</option>
                                                <option>Price, low to high</option>
                                                <option>Price, high to low</option>
                                                <option>Date, new to old</option>
                                                <option>Date, old to new</option>
                                      		</select>
                                      		<input class="collection-header__default-sort" type="hidden" value="manual">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--End Produk-->
                        <div class="grid-products grid--view-items">
                            <div class="row">
                                @foreach($barang_toko as $b)
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->    
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{ url('produkdetail', $b->id_barang) }}">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" src="./images/post/{{$b->foto}}" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" src="./images/post/{{$b->foto}}" alt="image" title="product" />
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn btn-addto-cart" type="button">Add To Cart</button>
                                        </form>
                                        
                                       <form method="POST" action="{{ url('add_wishlist') }} " enctype="multipart/form-data" >
                                            @csrf
                                            <div class="button-set">
                                                <input type="hidden" name="id_barang" value="{{ $b->id_barang }}">
                                                <div class="wishlist-btn">
                                                    <button class="wishlist add-to-wishlist" type="submit"><i class="icon anm anm-heart-l"></i></button>
                                                </div>
                                                
                                            </div>
                                        </form>
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{ url('produkdetail', $b->id_barang) }}">{{ $b->nama_barang }}</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">@currency($b->harga)</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                        <div class="product-review">
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                        </div>
                                    </div>
                                    <!-- End product details -->
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                    <div class="infinitpaginOuter">
                        <div class="infinitpagin">	
                            <a href="#" class="btn loadMore">Produk Lainnya</a>
                        </div>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
        </div>
        
    </div>
    <!--End Body Content-->

@endsection