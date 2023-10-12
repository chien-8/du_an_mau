<?php
if (is_array($product)) {
    extract($product);
}
?>

<body class="single single-product">
    <header id="header" class="header style-04  header-sticky" style="padding-top: 120px;">
    </header>
    <div class="banner-wrapper no_background">
        <div class="banner-wrapper-inner">
            <nav class="lynessa-breadcrumb"><a href="index.php">Home</a><i class="fa fa-angle-right"></i><a href="#">Shop</a>
                <i class="fa fa-angle-right"></i>Single Product
            </nav>
        </div>
    </div>
    <div class="single-thumb-vertical main-container shop-page no-sidebar mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="main-content col-md-12">
                    <div class="lynessa-notices-wrapper"></div>
                    <div id="product-27" class="post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-variable has-default-attributes">
                        <div class="main-contain-summary">
                            <div class="contain-left has-gallery" style="margin-top:100px">
                                <div class="single-left">
                                    <div class="lynessa-product-gallery lynessa-product-gallery--with-images lynessa-product-gallery--columns-4 images">
                                        <a href="#" class="lynessa-product-gallery__trigger">
                                            <img draggable="false" class="emoji" alt="🔍" src="image/<?= $image ?>"></a>
                                        <div class="flex-viewport">
                                            <figure class="lynessa-product-gallery__wrapper">
                                                <div class="lynessa-product-gallery__image">
                                                    <img src="./images/<?= $image ?>" alt="img">
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary entry-summary">
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <h1 class="product_title entry-title"><?= $namePro ?></h1>
                                    <p class="price"><span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span><?= $price ?> </span></p>
                                    <p class="stock in-stock">
                                        Availability: <span> In stock</span>
                                    </p>
                                    <div class="lynessa-product-details__short-description">
                                        <p><?= $description ?></p>
                                    </div>
                                    <table class="variations">
                                        <tbody>
                                            <tr>
                                                <td class="label"><label>Color</label></td>
                                                <td class="value">
                                                    <select title="box_style" data-attributetype="box_style" data-id="pa_color" class="attribute-select " name="attribute_pa_color" data-attribute_name="attribute_pa_color" data-show_option_none="yes">
                                                        <option data-type="" data-pa_color="" value="">Choose an option
                                                        </option>
                                                        <option data-width="30" data-height="30" data-type="color" data-pa_color="#3155e2" value="blue" class="attached enabled">Blue
                                                        </option>
                                                        <option data-width="30" data-height="30" data-type="color" data-pa_color="#ffe59e" value="pink" class="attached enabled">Pink
                                                        </option>
                                                        <option data-width="30" data-height="30" data-type="color" data-pa_color="#b6b8ba" value="red" class="attached enabled">Red
                                                        </option>
                                                        <option data-width="30" data-height="30" data-type="color" data-pa_color="#e8e120" value="yellow" class="attached enabled">Yellow
                                                        </option>
                                                    </select>
                                                    <div class="data-val attribute-pa_color" data-attributetype="box_style">
                                                        <label>
                                                            <input type="radio" name="color">
                                                            <span class="change-value color" style="background: #3155e2;" data-value="blue">
                                                            </span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="color">
                                                            <span class="change-value color" style="background: #52b745;" data-value="green">
                                                            </span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="color">
                                                            <span class="change-value color" style="background: #ffe59e;" data-value="pink">
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <a class="reset_variations" href="#" style="visibility: hidden;">Clear</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="single_variation_wrap">
                                        <div class="lynessa-variation single_variation"></div>
                                        <div class="lynessa-variation-add-to-cart variations_button ">
                                            <div class="quantity mb-0">
                                                <span class="qty-label">Quantiy:</span>
                                                <div class="control">
                                                    <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                    <input type="number" data-step="1" min="1" name="quantity" value="1" title="Qty" class="input-qty input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                                    <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                                </div>
                                            </div>
                                            <button type="submit" name="addcart" class="single_add_to_cart_button button alt lynessa-variation-selection-needed">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>

                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" rel="nofollow" data-product-id="27" data-product-type="variable" class="add_to_wishlist">
                                                Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <a href="#" class="compare button" data-product_id="27" rel="nofollow">Compare</a>
                                    <div class="product_meta">
                                        <div class="wcml-dropdown product wcml_currency_switcher">
                                            <ul>
                                                <li class="wcml-cs-active-currency">
                                                    <a class="wcml-cs-item-toggle">USD</a>
                                                    <ul class="wcml-cs-submenu">
                                                        <li>
                                                            <a>EUR</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="lynessa-tabs lynessa-tabs-wrapper">
                            <ul class="tabs dreaming-tabs" role="tablist">
                                <li class="additional_information_tab" id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
                                    <a href="#tab-additional_information">Additional information</a>
                                </li>
                                <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                    <a href="#tab-reviews">Reviews </a>
                                </li>
                            </ul>
                            <div class="lynessa-Tabs-panel lynessa-Tabs-panel--additional_information panel entry-content lynessa-tab" id="tab-reviews">
                                <div class="comment" id="comment">
                                    <form method="post">
                                        <textarea name="content_cmt" class="area-cmt" cols="60" rows="3" placeholder="Nhập bình luận của bạn" required></textarea> <br>
                                        <input type="hidden" name="idpro" value="<?= $idProduct ?>">
                                        <input type="submit" name="btn_cmt" class="ip-cmt" value="Gửi">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 dreaming_related-product">
                    <div class="block-title">
                        <h2 class="product-grid-title">
                            Related Products
                            <span></span>
                        </h2>
                    </div>



                    <div class="owl-slick owl-products equal-container better-height" data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                        <!-- sản phẩm cùng loại -->
                        <?php foreach ($related as $data) : extract($data) ?>
                            <div class="product-item style-01 post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock  instock shipping-taxable purchasable product-type-variable has-default-attributes ">
                                <div class="product-inner tooltip-left">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="index.php?act=detailPro&id=<?=$idProduct?>" tabindex="0">
                                            <img class="img-responsive" src="./images/<?= $image ?>" alt="STRIPE SKIRTS" width="600" height="778">
                                        </a>
                                        <div class="flash"><span class="onnew"><span class="text">New</span></span></div>
                                        <div class="group-button">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button show">
                                                    <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <div class="lynessa product compare-button">
                                                <a href="#" class="compare button">Compare</a>
                                            </div>
                                            <a href="index.php?act=detailPro&id=<?=$idProduct?>" class="button yith-wcqv-button">Quick View</a>
                                            <div class="add-to-cart">
                                                <a href="#" class="button product_type_variable add_to_cart_button">Add to
                                                    cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info equal-elem">
                                        <h3 class="product-name product_title">
                                            <a href="index.php?act=detailPro&id=<?=$idProduct?>" tabindex="0"><?= $namePro ?></a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span><?= $price ?></span></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                        <!-- end  -->
                    </div>

                </div>



            </div>
        </div>
    </div>