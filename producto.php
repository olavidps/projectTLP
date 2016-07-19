<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project TLP | Producto</title>
    <?php 
        require('header.php')
    ?>
</head>
<body>
    
    <header class="row" id="header2">
        <?php 
            require('nav.php')
        ?>
    </header> <!--Header-->
    
    <section id="breadcrumbRow" class="row">
        <div class="row pageTitle m0">
            <div class="container">
                <h4 class="fleft">detalles de producto</h4>
                <ul class="breadcrumb fright">
                    <li><a href="index.php">Inicio</a></li>
                    <li class="active">producto</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="row contentRowPad">
        <div class="container">
            <div class="row singleProduct">
                <div class="col-sm-7">
                    <div class="row m0 flexslider" id="productImageSlider">
                        <ul class="slides">
                            <li><img src="images/product/single/1.png" alt=""></li>
                            <li><img src="images/product/single/1.png" alt=""></li>
                            <li><img src="images/product/single/1.png" alt=""></li>
                            <li><img src="images/product/single/1.png" alt=""></li>
                            <li><img src="images/product/single/1.png" alt=""></li>
                            <li><img src="images/product/single/1.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="row m0 flexslider" id="productImageSliderNav">
                        <ul class="slides">
                            <li><img class="img-thumbnail" src="images/product/single/l1.png" alt=""></li>
                            <li><img class="img-thumbnail" src="images/product/single/l2.png" alt=""></li>
                            <li><img class="img-thumbnail" src="images/product/single/l3.png" alt=""></li>
                            <li><img class="img-thumbnail" src="images/product/single/l4.png" alt=""></li>
                            <li><img class="img-thumbnail" src="images/product/single/l5.png" alt=""></li>
                            <li><img class="img-thumbnail" src="images/product/single/l3.png" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="row m0">
                        <h4 class="heading">Comfortable dining table</h4>
                        <h3 class="heading price"><del>$580</del>$420</h3>
                        <div class="row m0 starsRow">
                            <div class="stars fleft">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-empty"></i>
                            </div>
                            <div class="fleft">
                                5 Review(s) <span>|</span> <a href="#">Add Your Review</a>
                            </div>
                        </div>
                        <div class="row descList m0">
                            <dl class="dl-horizontal">
                                <dt>manufacturer :</dt>
                                <dd>Tartaan & Co</dd>
                                <dt>availability :</dt>
                                <dd>In Stock 20 Item(s)</dd>
                                <dt>product code :</dt>
                                <dd>Xuo15</dd>
                            </dl>
                        </div>
                        <div class="row m0 shortDesc">
                            <p class="m0">Rustic, natural, often made of bark-covered logs or simple planks. Look for junk shop finds when in the country (for authenticity), or purchase hand-made new versions.</p>
                        </div>
                        <div class="row m0 colorSelect">
                            <h5 class="heading proAttr">Color :</h5>
                            <input type="radio" id="cl1" name="proColor" checked>
                            <label for="cl1"><span></span></label>
                            <input type="radio" id="cl2" name="proColor">
                            <label for="cl2"><span></span></label>
                            <input type="radio" id="cl3" name="proColor">
                            <label for="cl3"><span></span></label>
                            <input type="radio" id="cl4" name="proColor">
                            <label for="cl4"><span></span></label>
                            <input type="radio" id="cl5" name="proColor">
                            <label for="cl5"><span></span></label>
                            <input type="radio" id="cl6" name="proColor">
                            <label for="cl6"><span></span></label>
                        </div>
                        <div class="row m0">
                            <h5 class="heading proAttr">Size :</h5>
                            <select class="selectpicker sizeSelect">
                                <option value="queen">queen</option>
                                <option value="red">red</option>
                                <option value="black">black</option>
                                <option value="white">white</option>
                            </select>
                        </div>
                        <div class="row m0">
                            <ul class="list-inline wce">
                                <li><a href="#"><img src="images/icons/heart.png" alt="">Add to Wishlist</a></li>
                                <li><a href="#"><img src="images/icons/compare.png" alt="">Add to Compare</a></li>
                                <li><a href="#"><img src="images/icons/email.png" alt="">Email to a Friend</a></li>
                            </ul>
                        </div>
                        <div class="row m0 qtyAtc">
                            <div class="fleft quantity">
                                <div class="fleft">Qty <span>=</span></div>
                                <div class="input-group spinner">
                                    <input type="text" class="form-control" value="2">
                                    <div class="input-group-btn-vertical">
                                        <button class="btn btn-default"><i class="fa fa-angle-up"></i></button>
                                        <button class="btn btn-default"><i class="fa fa-angle-down"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="fleft btn btn-default"><img src="images/icons/cart3.png" alt=""> add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m0 tabRow">
                <ul class="nav nav-tabs" role="tablist" id="shortcodeTab">
                    <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">
                        <i class="fa fa-align-left"></i> description
                    </a></li>
                    <li role="presentation"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">
                        <i class="fa fa-thumbs-up"></i> review (1)
                    </a></li>
                    <li role="presentation"><a href="#additionInfo" aria-controls="additionInfo" role="tab" data-toggle="tab">
                        <i class="fa fa-file-text"></i> Additional Information
                    </a></li>
                </ul>
                <div class="tab-content shortcodeTabContent">
                    <div role="tabpanel" class="tab-pane row m0 active" id="description">
                        <div class="fleft img"><img src="images/product/tab-desc.png" alt=""></div>
                        <div class="fleft desc">
                            <h5 class="heading">Product Details</h5>
                            <p>Dining furniture designs are plain in appearance, stripped to bare essentials (few turnings, no decorations), featuring natural materials; no ornamentation; strong emphasis on function.Dining furniture designs are plain in appearance, stripped to bare essentials (few turnings, no decorations), featuring natural materials; no ornamentation; strong emphasis on function.</p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane row m0" id="review">
                        <div class="row m0 reviewCount">1 review for comfortable dining table</div>
                        <div class="row m0 reviewBody">
                            <span class="bold">4</span> out of 5 <br>
                            <span class="bold">K Admas</span> - March 10, 2014
                            <p class="m0">Amazing Product!</p>
                        </div>
                        <div class="row m0 reviewAdd">
                            <h4 class="heading">Add a review</h4>
                            <form action="#" role="form" method="post" class="row m0 reviewForm">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name *" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email *" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="url" class="form-control" placeholder="Your Website">
                                    </div>
                                    <div class="col-sm-6 ratingStars">
                                        Your Rating <input type="hidden" class="rating" data-fractions="2">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="heading">Your Review</h4>
                                        <textarea name="reviewText" id="reviewText" class="form-control reviewText"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" class="btn btn-primary filled">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane row m0" id="additionInfo">
                        <div class="row m0 additionInfoRow">
                            <div class="fleft infoTitle">Color</div>
                            <div class="fleft infos">Blue, Black, Red, Yellow</div>
                        </div>
                        <div class="row m0 additionInfoRow">
                            <div class="fleft infoTitle">Size</div>
                            <div class="fleft infos">S, M, L, XL</div>
                        </div>
                    </div>
                </div>
            </div> <!--Tabs Row-->
        </div>
    </section>
    
    <footer class="row">
        <?php 
            require('footer.php');
        ?>
    </footer>
</body>
</html>