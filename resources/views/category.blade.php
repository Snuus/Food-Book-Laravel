@extends('base')

@section('content')

        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common" data-bg-image="img/figure/inner-page-banner1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Recipe Categories</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Categories</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Category Area Start Here -->


        <section class="category-page-wrap padding-top-80 padding-bottom-50">
            <div class="container">
                <div class="row">

                    @foreach( $categories as $categorie)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">

                        <div class="category-box-layout1">
                            <figure class="item-figure"><a href="/recipes-by-category/{{$categorie->id}}"><img src="img/product/product29.jpg"
                                        alt="Product"></a></figure>
                            <div class="item-content">
                                <h3 class="item-title"><a href="/recipes-by-category/{{$categorie->id}}">{{$categorie->name}}</a></h3>
                                <span class="sub-title"> {{$categorie->id}}</span>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Category Area End Here -->
     @endsection
