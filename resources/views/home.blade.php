@extends('layouts.my-account')

@section('content')
    <section class="my_account_area pt--80 pb--55 bg--white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="my__account__wrapper">
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <H1> User Profile</H1>
                    <hr>
                    <h2> My Orders</h2>
                    @foreach($orders as $order)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <ul class="list-group">
                                @foreach($order->cart->items as $item)
                                <li class="list-group-item">
                                    <span class="badge">{{ $item['price'] }}</span>
                                    {{ $item['item']['title'] }} | {{ $item['qty'] }} Units
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="panel-footer">
                            {{ $order->cart->totalPrice }}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

