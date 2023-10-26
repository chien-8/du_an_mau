
<div class="banner-wrapper has_background">
    <img src="assets/images/banner-for-all2.jpg" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
</div>
<h1 class="page-title">Shop</h1>
<div class="main-container shop-page left-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-xl-9 col-lg-8 col-md-8 col-sm-12 has-sidebar">
                <div class="shop-control shop-before-control">
                    <div class="grid-view-mode">
                        <form>
                            <a href="#" data-toggle="tooltip" data-placement="top" class="modes-mode mode-grid display-mode active" value="grid">
                                <span class="button-inner">
                                    Shop Grid
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                            <a href="#" data-toggle="tooltip" data-placement="top" class="modes-mode mode-list display-mode " value="list">
                                <span class="button-inner">
                                    Shop List
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                        </form>
                    </div>
                </div>
                <div class=" auto-clear lynessa-products">
                    <ul class="row products columns-3">
                        <!-- danh sách sản phẩm  -->
                        <?php
                        foreach ($listPro as $sp) : extract($sp); 
                            $dis = "";
                            if ($quantity <= 0) {
                                $dis = "disabled";
                            }
                        ?>
                            <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes" data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                                <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="index.php?act=detailPro&id=<?= $idProduct ?>">
                                        <img class="img-responsive" src="./images/<?=  $image ?>" alt="MINI SKIRT" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    
                                    <a href="index.php?act=deatilPro&id=<?= $idProduct ?>" class="button yith-wcqv-button" data-product_id="24">Quick View</a>
                                    <div class="group-button">                                        
                                        <form action="index.php?act=addtocart" method="post" >
                                          
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="lynessa product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>

                                        <a href="index.php?act=deatilPro&id=<?= $idProduct ?>" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Add to
                                                cart</a>
                                        </form>
                                    </div>
                                    </div> 
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#"><?= $namePro ?></a>
                                    </h3>  
                                    <div class="rating-wapper nostar">
                                        <span ><?php 
                                        foreach($listAllCate as $dm){
                                            extract($dm);
                                            if($idCate == $idCategory){
                                                echo $name;
                                            }  
                                        } 
                                    ?></span>
                                    </div>
                                    <span class="price"><span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol"> <span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span><?=  $price ?></span></span>
                                    <div class="lynessa-product-details__short-description">
                                        <p><?= $description?></p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
                                        </ul>
                                    </div>
                                </div>
                                </div>
                            </li>
                        <?php endforeach ?>

                        <!-- end  -->
                    </ul>
                        
                </div>
                <div class="shop-control shop-after-control">
                    <nav class="lynessa-pagination">
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#">Next</a>
                    </nav>
                </div>
            </div>
            <div class="sidebar col-xl-3 col-lg-4 col-md-4 col-sm-12">
                <div id="widget-area" class="widget-area shop-sidebar">
                    <div id="lynessa_product_search-2" class="widget lynessa widget_product_search">
                        <form class="lynessa-product-search" action="index.php?act=shop" method="post">
                            <input id="lynessa-product-search-field-0" class="search-field" placeholder="Search products…" name="kyw" type="search">
                            <button type="submit" value="Search">Search</button>
                        </form>
                    </div>

                    <div id="lynessa_product_categories-3" class="widget lynessa widget_product_categories">
                        <h2 class="widgettitle">Product categories<span class="arrow"></span></h2>
                        <ul class="product-categories">
                            <!-- <p id="groupId" name="gruopId"></p> -->
                            <form method="post" action="index.php?act=shopfilter">
                            <?php
                            foreach ($listAllCate as $category) : 
                                extract($category);
                            ?>
                                <li class="cat-item cat-item-22">
                                    <label>
                                        <input type="checkbox" name="cate[]" class="checkbox"  value="<?= $idCategory?>">
                                        <span>
                                            <?= $name ?>
                                        </span>
                                    </label>
                                </li>
                            <?php endforeach ?>
                            <button type="submit" name="filter" class="btn">Filter </button>
                            </form>
                        </ul>
                    </div>
                </div>
                <!-- .widget-area -->

            </div>
        </div>
    </div>

</div>

