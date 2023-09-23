@php
$page='panier';
@endphp
@extends('base')
@section('content')
@if(Cart::count()>0)
<!-- <a href="{{route('delete')}}">
    <button class="btn btn-danger">vider</button>
</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Images</th>
        <th scope="col">Nom</th>
        <th scope="col">Prix</th>
        <th scope="col">Quantité</th>
        <th scope="col">Supprimer</th>
        </tr>
    </thead>
    <tbody>
    @foreach(Cart::content() as $categorie)
        <tr>
        <td>{{ $categorie->model->img}}</td>
        <td>{{ $categorie->name }}</td>
        <td>{{ $categorie->price }}</td>
        <td>{{ $categorie->qty}}</td>
        
        <td>
            <form action="{{route('cart.destroy',$categorie->rowId)}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger">Supprimer</button>
            </form>
        </td>
        </tr>
    @endforeach
    </tbody>
    </table>
    
</a> -->



<div class="untree_co-section before-footer-section">

    <div class="container">
    
        <div class="row mb-5">
            <!-- <form class="col-md-12" method="post"> -->
            <div class="site-blocks-table">
            <table class="table">
              <thead>
                <tr>
                  <th class="product-thumbnail">Image</th>
                  <th class="product-name">Product</th>
                  <th class="product-price">Price</th>
                  <th class="product-quantity">Quantity</th>
                  <th class="product-total">Total</th>
                  <th class="product-remove">Remove</th>
                </tr>
              </thead>
              <tbody>
                @foreach(Cart::content() as $categorie)
    
                    <tr>
                      <td class="product-thumbnail">
                        <img src="{{ $categorie->model->imageurl()}}" alt="" class="img-fluid">
                        
                      </td>
                      <td class="product-name">
                        {{ $categorie->name }}
                      </td>
                      <td>
                        {{ $categorie->price }}
                      </td>
                      <td>
    
                        <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                          <div class="input-group-prepend">
                            <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                          </div>
                          <input type="text" class="form-control text-center quantity-amount" value="{{ $categorie->qty}}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                          <div class="input-group-append">
                            <button class="btn btn-outline-black increase" type="button">&plus;</button>
                          </div>
                        </div>
    
                      </td>
                      <td>
    
                      </td>
                      <td>
                        <form action="{{route('cart.destroy',$categorie->rowId)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">X</button>
                        </form>
                      </td>
                    </tr>
    
                @endforeach
              </tbody>
            </table>
            </div>
            <!-- </form> -->
        </div>
    
        <!-- <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <a href="{{route('delete')}}">
                    <button class="btn btn-black btn-sm btn-block">Vider le panier</button>
                </a>
              </div> -->
        <div class="row">
            <div class="col-md-6">
                <div class="row mb-5">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <a href="{{route('delete')}}">
                            <button type="button" class="btn btn-black btn-sm btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal">Vider le panier</button>
                        </a>
                    </div>
                    <div class="col-md-6">
                      <button class="btn btn-outline-black btn-sm btn-block">Continue Shopping</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <label class="text-black h4" for="coupon">Coupon</label>
                      <p>Enter your coupon code if you have one.</p>
                    </div>
                    <div class="col-md-8 mb-3 mb-md-0">
                      <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                    </div>
                    <div class="col-md-4">
                      <button class="btn btn-black">Apply Coupon</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-5">
                <div class="row justify-content-end">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-12 text-right border-bottom mb-5">
                                <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                            </div>
                        </div>
                    <div class="row mb-3">
                    <div class="col-md-6">
                        <span class="text-black">Subtotal</span>
                    </div>
                    <div class="col-md-6 text-right">
                        <strong class="text-black">$230.00</strong>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <span class="text-black">Total</span>
                    </div>
                    <div class="col-md-6 text-right">
                        <strong class="text-black">$230.00</strong>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

@else 

    <div class="untree_co-section before-footer-section">

        <div class="col-md-6 mb-3 mb-md-0">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-black btn-sm btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Launch demo modal
            </button>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Panier vider !!
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- fin modal -->

        <div class="modal-dialog modal-sm">
            aucun produit
        </div>

    </div>
    
@endif
   






@endsection



       