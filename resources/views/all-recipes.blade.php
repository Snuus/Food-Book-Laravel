@extends('base')

@section('content')
        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common" data-bg-image="img/figure/inner-page-banner1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Search Your Recipes</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>All Recipes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Recipe With Sidebar Area Start Here -->
        <section class="all-recipes-page-wrap padding-top-80 padding-bottom-22">
            <div class="container">
                <div class="row gutters-60">
                    <div class="col-lg-12">
                        <div class="adv-search-wrap">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Author Name or Recipe Search . . ." />
                                <div class="btn-group">
                                    <div class="input-group-btn">
                                        <button type="button" id="adv-serch" class="btn-adv-serch">
                                            <i class="icon-plus flaticon-add-plus-button"></i>
                                            <i class="icon-minus fas fa-minus"></i>
                                            Advanced Search</button>
                                    </div>
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn-search"><i class="flaticon-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="advance-search-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3 class="item-title">BY CATEGORIES</h3>
                                        <ul class="search-items">
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox101" type="checkbox">
                                                    <label for="checkbox101">Baking</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox102" type="checkbox">
                                                    <label for="checkbox102">Dinner</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox103" type="checkbox">
                                                    <label for="checkbox103">Lunch</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox104" type="checkbox">
                                                    <label for="checkbox104">Sea Food</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox105" type="checkbox">
                                                    <label for="checkbox105">Sweets</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <h3 class="item-title">BY INGREDIENTS</h3>
                                        <ul class="search-items">
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox106" type="checkbox">
                                                    <label for="checkbox106">Oil</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox107" type="checkbox">
                                                    <label for="checkbox107">Vegitables</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox108" type="checkbox">
                                                    <label for="checkbox108">Fish</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox109" type="checkbox">
                                                    <label for="checkbox109">White Salt</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox110" type="checkbox">
                                                    <label for="checkbox110">Pizza

                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox111" type="checkbox">
                                                    <label for="checkbox111">Meat</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox112" type="checkbox">
                                                    <label for="checkbox112">Juice</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3 class="item-title">BY CUISINE</h3>
                                        <ul class="search-items">
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox113" type="checkbox">
                                                    <label for="checkbox113">Indian</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox114" type="checkbox">
                                                    <label for="checkbox114">Italian</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox115" type="checkbox">
                                                    <label for="checkbox115">Maxican</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox116" type="checkbox">
                                                    <label for="checkbox116">Bengali</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox117" type="checkbox">
                                                    <label for="checkbox117">Franch</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <h3 class="item-title">BY METHOD</h3>
                                        <ul class="search-items">
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox118" type="checkbox">
                                                    <label for="checkbox118">Baking</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox119" type="checkbox">
                                                    <label for="checkbox119">Freezing</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox120" type="checkbox">
                                                    <label for="checkbox120">Frying</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox121" type="checkbox">
                                                    <label for="checkbox121">Grilling</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($recipes as $recipe)
                            <div class="col-md-3 col-12">
                                <div class="product-box-layout1">
                                    <figure class="item-figure"><a href="single-recipe.blade.php"><img src="img/product/product50.jpg"

                                                                                                       alt="Product"></a></figure>
                                    <div class="item-content">
                                        <span class="sub-title">{{$recipe->category['name']}}</span>
                                        <h3 class="item-title"><a href="single-recipe.blade.php">{{$recipe->name}}</a></h3>
                                        <ul class="item-rating">
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-empty"><i class="fas fa-star"></i></li>
                                            <li><span>9<span> / 10</span></span> </li>
                                        </ul>
                                        <p>{{$recipe->body}}</p>
                                        <ul class="entry-meta">
                                            <li><a href="#"><i class="fas fa-clock"></i>15 Mins</a></li>
                                            <li><a href="#"><i class="fas fa-user"></i>by <span>{{$recipe->user['username']}}</span></a></li>
                                            <li><a href="#"><i class="fas fa-heart"></i><span>02</span> Likes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>


        <!-- Recipe With Sidebar Area End Here -->
  @endsection
