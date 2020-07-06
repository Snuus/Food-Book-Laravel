@extends('base')

<!--MAKE CUSTOM STYLE SECTION WITH BASE IMPORT-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ranna | Submit Recipes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Normalize Css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main Css -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Summernote CSS -->
    <link rel="stylesheet" href="css/summernote.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernizr Js -->
    <script src="js/modernizr-3.6.0.min.js"></script>

</head>




    @section('content')
        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common" data-bg-image="img/figure/inner-page-banner1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Submit a Recipe</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Recipe Post</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Submit Recipe Area Start Here -->
        <section class="submit-recipe-page-wrap padding-top-74 padding-bottom-50">
            <div class="container">
                <div class="row gutters-60">
                    <div class="col-lg-8">
                        <form class="submit-recipe-form" method="POST" action="/submit-recipe">
                            @csrf
                            <div class="form-group">
                                <label>Recipe Title</label>
                                <input type="text" placeholder="Recipe Name" class="form-control" name="titel" id="titel"
                                    data-error="Subject field is required" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label>Choose Category</label>
                                <select class="select2" name='category' id="category">
                                    @foreach($categorys as $category)
                                    <option  value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea placeholder="Type your text" class="textarea form-control" name="body" id="form-message body"
                                    rows="7" cols="20" data-error="Message field is required" required n></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="additional-input-wrap">
                                <label>Upload your photos</label>
                                <div class="form-group">
                                    <ul class="upload-img">
                                        <li><img src="img/figure/upload-banner1.jpg" alt="Upload Image"></li>
                                        <li><img src="img/figure/upload-banner1.jpg" alt="Upload Image"></li>
                                        <li><img src="img/figure/upload-banner1.jpg" alt="Upload Image"></li>
                                        <li><img src="img/figure/upload-banner1.jpg" alt="Upload Image"></li>
                                        <li><img src="img/figure/upload-banner1.jpg" alt="Upload Image"></li>
                                    </ul>
                                    <button type="submit" class="btn-upload"><i class="fas fa-cloud-upload-alt"></i>UPLOAD</button>
                                </div>
                            </div>
                            <div class="additional-input-wrap">
                                <label>Additional Informations:</label>
                                <div class="row gutters-5">
                                    <div class="col-lg-6">
                                        <div class="form-group additional-input-box icon-left">
                                            <i class="far fa-clock"></i>
                                            <input type="text" placeholder="Preparation Time: 00.00.00" class="form-control"
                                                name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group additional-input-box icon-left">
                                            <i class="fas fa-utensils"></i>
                                            <input type="text" placeholder="Cooking Time: 00.00.00" class="form-control"
                                                name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group additional-input-box icon-left">
                                            <i class="fas fa-users"></i>
                                            <input type="text" placeholder="Serving People: 00" class="form-control"
                                                name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group additional-input-box icon-left">
                                            <i class="fas fa-eye"></i>
                                            <input type="text" placeholder="People Views: 00" class="form-control" name="name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="additional-input-wrap">
                                <label>Parts:</label>
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <div class="form-group additional-input-box icon-left">
                                            <i class="fas fa-arrows-alt"></i>
                                            <input type="text" placeholder="Part Name" class="form-control"
                                                   name="partname" id="partname">
                                        </div> <div class="form-group">
                                        <textarea placeholder="Type your text" class="textarea form-control" name="parttext" id="form-message parttext"
                                                  rows="7" cols="20" data-error="Message field is required" required n></textarea>
                                        </div>


                                    </div>
                                    <label class="col-12">Steps:</label>
                                    <div class="col-6">
                                        <div class="form-group additional-input-box icon-left">
                                            <i class="fas fa-arrows-alt"></i>
                                            <input type="text" placeholder="Stepnumber" class="form-control"
                                                name="stepnumber" id="stepnumber">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group additional-input-box icon-right">
                                            <input type="text" placeholder="Step title" class="form-control"
                                                   name="steptitle" id="steptitle">
                                            <i class="fas fa-times"></i>

                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <textarea placeholder="Type your text" class="textarea form-control" name="stepdetail" id="form-message stepdetail"
                                                  rows="7" cols="20" data-error="Message field is required" required ></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn-upload"><i class="flaticon-add-plus-button"></i>create new part and steps</button>
                            </div>

                            <div class="additional-input-wrap">
                                <label>Ingredients:</label>
                                <div class="row no-gutters">
                                    <div class="col-6">
                                        <div class="form-group additional-input-box icon-left">
                                            <i class="fas fa-arrows-alt"></i>
                                            <input type="text" placeholder="Preparation Time: 00.00.00" class="form-control"
                                                   name="name">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group additional-input-box icon-right">
                                            <input type="text" placeholder="Cooking Time: 00.00.00" class="form-control"
                                                   name="name">
                                            <i class="fas fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group additional-input-box icon-left">
                                            <i class="fas fa-arrows-alt"></i>
                                            <input type="text" placeholder="Serving People: 00" class="form-control"
                                                   name="name">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group additional-input-box icon-right">
                                            <input type="text" placeholder="People Views: 00" class="form-control" name="name">
                                            <i class="fas fa-times"></i>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn-upload"><i class="flaticon-add-plus-button"></i>ADD NEW
                                    INGREDIENT</button>
                            </div>






                            <div class="form-group">
                                <label>Description</label>
                                <div class="summernote"></div>
                            </div>
                            <button type="submit" class="btn-submit">SUBMIT RECIPE</button>
                        </form>
                    </div>
                    <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
                        <div class="widget">
                            <div class="section-heading heading-dark">
                                <h3 class="item-heading">FEATURED ARTICLE</h3>
                            </div>
                            <div class="widget-featured-feed">
                                <div class="rc-carousel nav-control-layout1" data-loop="true" data-items="3"
                                    data-margin="5" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="700"
                                    data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1"
                                    data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1"
                                    data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="1"
                                    data-r-small-nav="true" data-r-small-dots="false" data-r-medium="1"
                                    data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="1"
                                    data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="1"
                                    data-r-extra-large-nav="true" data-r-extra-large-dots="false">
                                    <div class="featured-box-layout1">
                                        <div class="item-img">
                                            <img src="img/product/product17.jpg" alt="Brand" class="img-fluid">
                                        </div>
                                        <div class="item-content">
                                            <span class="ctg-name">BREAKFAST</span>
                                            <h4 class="item-title"><a href="single-recipe.blade.php">Baked Garlic Prawn</a></h4>
                                            <p>Definitiones noel ei verear intelle
                                                gatpri civibus consequat area
                                                refund efficiantue.</p>
                                        </div>
                                    </div>
                                    <div class="featured-box-layout1">
                                        <div class="item-img">
                                            <img src="img/product/product18.jpg" alt="Brand" class="img-fluid">
                                        </div>
                                        <div class="item-content">
                                            <span class="ctg-name">DINNER</span>
                                            <h4 class="item-title"><a href="single-recipe.blade.php">Baked Garlic Prawn</a></h4>
                                            <p>Definitiones noel ei verear intelle
                                                gatpri civibus consequat area
                                                refund efficiantue.</p>
                                        </div>
                                    </div>
                                    <div class="featured-box-layout1">
                                        <div class="item-img">
                                            <img src="img/product/product19.jpg" alt="Brand" class="img-fluid">
                                        </div>
                                        <div class="item-content">
                                            <span class="ctg-name">SALAD</span>
                                            <h4 class="item-title"><a href="single-recipe.blade.php">Baked Garlic Prawn</a></h4>
                                            <p>Definitiones noel ei verear intelle
                                                gatpri civibus consequat area
                                                refund efficiantue.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="section-heading heading-dark">
                                <h3 class="item-heading">SUBSCRIBE &amp; FOLLOW</h3>
                            </div>
                            <div class="widget-follow-us">
                                <ul>
                                    <li class="single-item"><a href="#"><i class="fab fa-facebook-f"></i>LIKE ME ON</a></li>
                                    <li class="single-item"><a href="#"><i class="fab fa-twitter"></i>LIKE ME</a></li>
                                    <li class="single-item"><a href="#"><i class="fab fa-linkedin-in"></i>LIKE ME</a></li>
                                    <li class="single-item"><a href="#"><i class="fab fa-pinterest-p"></i>LIKE ME</a></li>
                                    <li class="single-item"><a href="#"><i class="fab fa-instagram"></i>LIKE ME</a></li>
                                    <li class="single-item"><a href="#"><i class="fab fa-youtube"></i>Subscribe</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="section-heading heading-dark">
                                <h3 class="item-heading">LATEST RECIPES</h3>
                            </div>
                            <div class="widget-latest">
                                <ul class="block-list">
                                    <li class="single-item">
                                        <div class="item-img">
                                            <a href="#"><img src="img/product/latest1.jpg" alt="Post"></a>
                                            <div class="count-number">1</div>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-ctg">DESERT</div>
                                            <h4 class="item-title"><a href="#">Salami Oven Roasted are
                                                    Mozzarella Oelette</a></h4>
                                            <div class="item-post-by"><a href="single-blog.html"><i class="fas fa-user"></i><span>by</span>
                                                    John Martin</a></div>
                                        </div>
                                    </li>
                                    <li class="single-item">
                                        <div class="item-img">
                                            <a href="#"><img src="img/product/latest2.jpg" alt="Post"></a>
                                            <div class="count-number">2</div>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-ctg">DESERT</div>
                                            <h4 class="item-title"><a href="#">Salami Oven Roasted are
                                                    Mozzarella Oelette</a></h4>
                                            <div class="item-post-by"><a href="single-blog.html"><i class="fas fa-user"></i><span>by</span>
                                                    John Martin</a></div>
                                        </div>
                                    </li>
                                    <li class="single-item">
                                        <div class="item-img">
                                            <a href="#"><img src="img/product/latest3.jpg" alt="Post"></a>
                                            <div class="count-number">3</div>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-ctg">DESERT</div>
                                            <h4 class="item-title"><a href="#">Salami Oven Roasted are
                                                    Mozzarella Oelette</a></h4>
                                            <div class="item-post-by"><a href="single-blog.html"><i class="fas fa-user"></i><span>by</span>
                                                    John Martin</a></div>
                                        </div>
                                    </li>
                                    <li class="single-item">
                                        <div class="item-img">
                                            <a href="#"><img src="img/product/latest4.jpg" alt="Post"></a>
                                            <div class="count-number">4</div>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-ctg">DESERT</div>
                                            <h4 class="item-title"><a href="#">Salami Oven Roasted are
                                                    Mozzarella Oelette</a></h4>
                                            <div class="item-post-by"><a href="single-blog.html"><i class="fas fa-user"></i><span>by</span>
                                                    John Martin</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget">
                            <div class="section-heading heading-dark">
                                <h3 class="item-heading">INSTAGRAM</h3>
                            </div>
                            <div class="widget-instagram">
                                <ul>
                                    <li>
                                        <div class="item-box">
                                            <img src="img/social-figure/social-figure9.jpg" alt="Social Figure" class="img-fluid">
                                            <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <img src="img/social-figure/social-figure10.jpg" alt="Social Figure" class="img-fluid">
                                            <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <img src="img/social-figure/social-figure11.jpg" alt="Social Figure" class="img-fluid">
                                            <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <img src="img/social-figure/social-figure12.jpg" alt="Social Figure" class="img-fluid">
                                            <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <img src="img/social-figure/social-figure13.jpg" alt="Social Figure" class="img-fluid">
                                            <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <img src="img/social-figure/social-figure14.jpg" alt="Social Figure" class="img-fluid">
                                            <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <img src="img/social-figure/social-figure15.jpg" alt="Social Figure" class="img-fluid">
                                            <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <img src="img/social-figure/social-figure16.jpg" alt="Social Figure" class="img-fluid">
                                            <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <img src="img/social-figure/social-figure17.jpg" alt="Social Figure" class="img-fluid">
                                            <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Submit Recipe Area End Here -->

    <!--TO-DO : MAKE CUSTOM FIELD FOR PAGE RELATED JS-->
    <!-- Jquery Js -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins Js -->
    <script src="js/plugins.js"></script>
    <!-- Owl Carousel Js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Summernote JS -->
    <script src="js/summernote.min.js"></script>
    <!-- Select 2 Js -->
    <script src="js/select2.full.min.js"></script>
    <!-- Smoothscroll Js -->
    <script src="js/smoothscroll.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
@endsection
