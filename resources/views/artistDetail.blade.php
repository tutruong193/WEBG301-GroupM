<!-- <div class="details-product">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="rows row-width">
            <form enctype="multipart/form-data" id="add-to-cart-form" action="/cart/add" method="post" class="row form-width form-inline">
                <div class="product-detail-left product-images col-xs-12 col-sm-6 col-md-5 col-lg-5">
                    <div class="rows">
                        

                       

                    </div>
                </div>
                <div class="product-detail-left product-images col-xs-12 col-sm-6 col-md-5 col-lg-5">
                    <div class="rows">
                        <div class="col_large_default large-image">
                            <a href="" class="" data-rel="">
                                
                                <div style="height:470px;width:470px;" class="zoomWrapper"><div style="height:470px;width:470px;" class="zoomWrapper"><img id="img_01" class="img-responsive" alt="SEA CAVE BABY TEE - BLACK" src="" data-zoom-image="" style="position: absolute;"></div></div>
                            </a>
                            <div class="hidden">
                                
                                
                                
                                
                                <div class="item">
                                    <a href="" data-image="" data-zoom-image="" data-rel="">										
                                    </a>
                                </div>	
                                
                                
                                
                                
                               
                                
                            </div>
                        </div>

                        <div class="thumb_gallary">
                            
                            <div id="gallery_02" class="owl_width no-padding owl-carousel owl-theme thumbnail-product thumb_product_details not-dqowl owl-loaded owl-drag" data-loop="false" data-lg-items="5" data-md-items="4" data-sm-items="4" data-xs-items="4" data-margin="10">
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            <div class="owl-stage-outer owl-height" style="height: 90px;"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 438px;"><div class="owl-item active" style="width: 82.5px; margin-right: 5px;"><div class="item">
                                    <a href="#" data-image="" data-zoom-image="">
                                        <img data-img="" src="" alt="">
                                    </a>
                                </div></div>
                            <div class="owl-item active" style="width: 82.5px; margin-right: 5px;"><div class="item">
                                    <a href="#" data-image="">
                                        <img data-img="" src="" alt="SEA CAVE BABY TEE - BLACK">
                                    </a>
                            </div></div>
                        </div>
                            </div>
                            
           

                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 details-pro">
                    <h1 class="title-product" itemprop="name">Son Tung MTP</h1>
                    <div class="group-status">
                        <span >
                            
                           Viet Nam
                            
                            </span>
                            <span class="hidden-xs">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                        </span>
                        <span class="first_status"><span class="a_name">Status:</span> <span class="status_name availabel">Available</span></span>
                    </div>
                    
                    <div class="price-box" itemscope="" itemtype="">
                        
                        <span class="special-price"><span class="price product-price" itemprop="price">8000$</span> 
                           
                        </span> 
                        
                                 
                   
                                                
                </div>
            










<link href="vn" rel="stylesheet" type="text/css" media="all">
<div class="app_buyx_promotion"></div>
</form>

            <div class="tab_width_full">
                <div class="row xs-margin-top-15">
                    
                    <div id="tab_ord" class="col-xs-12 col-sm-12 col-lg-12 col-md-12">

                        <div class="product-tab e-tabs not-dqtab">
                            <span class="border-dashed-tab"></span>
                            <ul class="tabs tabs-title clearfix">	
                                
                                <li class="tab-link current" data-tab="tab-1">
                                    <h3><span>Mô tả</span></h3>
                                </li>																	
                                
                                
                                
                            </ul>																									
                            <div class="tab-float">
                                
                                <div id="tab-1" class="tab-content content_extab current">
                                    <div class="rte">
                                        
<p>NEEDS OF WISDOM®</p>
<p>Streetwear</p>
<p>Based in Saigon</p>
<p>Made in Vietnam</p>
<p><strong>Hệ Thống Cửa Hàng</strong></p>



                                                                                
                                    </div>
                                </div>	
                                
                                
                                
                            </div>
                        </div>		
                    </div>
                    


                </div>
            </div>

        </div>
    </div>
</div> -->
@extends('header')
@section('main-section')
<header>
    <link rel="stylesheet" href="{{asset('css/artisDetail.css')}}">
</header>
<div class="sanpham">
        <div class="container">
            <div class="product-top row">
                <p>Home</p><i class="ti-angle-right"></i>
                <p>{{$artist -> FirstName}} {{$artist -> LastName}}</p>
            </div>
            <div class="product-content row">
                <div class="product-content-left row">
                    <div class="product-content-left-big-img">
                        <img src="{{$artist -> Img}}" alt="">

                    </div>
                </div>
                <div class="product-content-right">
                    <form action="" method="POST">
                        <div class="product-content-right-product-name">
                            <p style="font-size:20px;color:black;font-weight:bold;">{{$artist -> FirstName}} {{$artist -> LastName}}</p>
                        </div>
                        <div class="product-content-right-product-price">
                            <p>{{$artist -> BirthDate}}</p>
                        </div>
                        <div class="product-content-right-product-quantity">
                            <p>{{$artist -> Description}}</p> 
                        </div>
                        <div class="product-content-right-product-button">
                            <button type="submit">
                                <i class="ti-shopping-cart" name="add-to-cart"></i>
                                <p>Thue</p>
                                
                            </button>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>

    </div>
@endsection
@extends ('footer')
