@php
$page='panier';
@endphp
@extends('base')
@section('count',$cpt)
    

@section('content')

    
<div class="untree_co-section before-footer-section">
  <div class="container">
      <div class="row mb-5">
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
            
             @forelse ($data as $produit)
             <tr>
             
             <td class="product-thumbnail">
              <img src="{{$produit->model->imageurl()}}" alt="" class="img-fluid">
                </td>

                <td class="product-name">
                  {{ $produit->name }}
                </td>
                <td>
                  {{ $produit->price }}
                </td>
                <td>
                  <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                    <div class="input-group-prepend">
                      <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                    </div>
                    <input type="text" class="form-control text-center quantity-amount" value="{{ $produit->qty}}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    <div class="input-group-append">
                      <button class="btn btn-outline-black increase" type="button">&plus;</button>
                    </div>
                  </div>

                </td>
                <td>

                </td>
                <td>
                  <form action="{{route('cart.destroy',$produit->rowId)}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">X</button>
                  </form>
                </td>
              </tr>
              @empty
              <div class="untree_co-section before-footer-section">

                <div class="modal-dialog modal-sm">
                    <h1>Panier Vide.</h1>
                </div>
        
            </div>
           @endforelse
            </tbody>
          </table>
        </div>
      </div>
    
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                  <a href="{{route('delete')}}">
                      <button type="button" class="btn btn-black btn-sm btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal">Vider le panier</button>
                  </a>
              </div>
              <div class="col-md-6">
                <a class="btn btn-outline-black btn-sm btn-block" href="{{route('categorie.index')}}">Continue Shopping</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
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
                  <strong class="text-black">{{Cart::Subtotal()}}</strong>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6">
                  <span class="text-black">Total</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="text-black">{{Cart::Total()}} FCFA</strong>
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
</div>
</div>

@if(Cart::count()<=0)

    <div class="untree_co-section before-footer-section">

        <div class="modal-dialog modal-sm">
            <h1>Panier Vide.</h1>
        </div>

    </div>
    
@endif


@endsection



       