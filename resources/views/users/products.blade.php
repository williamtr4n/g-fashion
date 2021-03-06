@extends('layouts.master_layout')
@extends('layouts.product_layout')
@section('filter')
<div class="carousel slide">
    <!-- The Slideshow -->
    <div class="img">
    </div>
    <div class="row">
        <div class="col-4">
            <div class="input-group rounded m-5">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                  <i class="fas fa-search"></i>
                </span>
              </div>
        </div>
        <div class="col-8  ">
            <div class=" m-5 d-flex justify-content-end">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-filter"></i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="select m-5">
                            <form action="">
                                <select class="form-select form-select-lg mb-3 " aria-label=".form-select-lg example">
                                    <option selected>Category</option>
                                    <option value="1">Adidas</option>
                                    <option value="2">Nike</option>
                                    <option value="3">Order</option>
                                </select>
                                <select class="form-select form-select-lg  mb-3 " aria-label=".form-select-lg example">
                                    <option selected>Sort by</option>
                                    <option value="1">Price increase</option>
                                    <option value="2">Price decrease</option>
                                </select>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-dark">Ok</button>
                            </div>
                            </form>   
                            
                        </div>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('content')
    <div class="row">
        @foreach ($products as $product)
        <div class="col-3">
            <div class='container-fluid'>
                <div class="card mx-auto col-md-3 col-10 mt-5"> <img class='mx-auto img-thumbnail' src="cover/{{$product->cover_img}}" width="auto" height="auto" />
                    <div class="card-body text-center mx-auto">
                        <div class='cvp'>
                            <h5 class="card-title font-weight-bold" id="name">{!! $product->name !!}</h5>
                            <p class="card-text" id="price">Price: ${{$product->price}}</p>
                            <a href="/categories/{{$product->category->slug}}" class="card-text" id="price">Category: {{$product->category->name}}</a> 
                            <a href="/products/{{$product->slug}}" class="btn details px-auto" >Details</a><br />
                            <a href="#" class="btn cart px-auto">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
@section('menu_js_2')
<script src="js/navbar2.js"></script>
@endsection