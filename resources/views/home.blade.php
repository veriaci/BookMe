@extends('layouts.my-account')

@section('content')
    <section class="my_account_area pt--80 pb--55 bg--white">
        <div class="container">
            <H1> User Profile</H1>
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
                    <h2> My Orders</h2>
                    <hr><br>
                    @foreach($orders as $order)
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>Order No: {{ $order->id }}</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                @foreach($order->cart->items as $item)
                                <li class="list-group-item">
                                    <span class="badge">Rp. {{ $item['price'] }}</span>
                                    {{ $item['item']['title'] }} | {{ $item['qty'] }} Units
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <h4>Total Price : {{ $order->cart->totalPrice }}</h4>
                        </div>
                    </div>
                        <hr><br>
                    @endforeach
                </div>
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
                    <h2> My Rent</h2>
                    <hr><br>
                    @foreach($rents as $rent)
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>Order No: {{ $rent->id }}</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                <!--{{ $books = App\Product::where('id', $rent->product_id)->get() }}-->
                                    @foreach($books as $book)
                                        <li class="list-group-item">
                                            {{ $book->title }} || <a style="color: red">Due Date: {{ $rent->due_date }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <hr><br>
                    @endforeach
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection

