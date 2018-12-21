@extends('layouts.master')

@section('title','Cart - Rajo')

@section('content')
    <div class="container">
        <p><a href="{{ url('shop') }}">Home</a> / Cart</p>
        <h1>Your Cart</h1>

        <hr>

        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif

        @if (sizeof(Cart::content()) > 0)

            <table class="table">
                <thead>
                    <tr>

                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th class="column-spacer"></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach (Cart::content() as $item)
                    <tr>

                      <td><a href="/menu/{{$item->rowId}}">{{ $item->name }}</a></td>
                        <td>
                            <form action="/cart/update/{{$item->rowId}}" method="post" class="side-by-side">
                                {!! csrf_field() !!}
                                <input type="number" name="qty" value="{{$item->qty}}">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="submit" class="btn btn-danger btn-sm" value="Update">
                            </form>
                        </td>
                        <td>{{ $item->subtotal }}</td>
                        <td class=""></td>
                        <td>
                            <form action="/cart/{{$item->rowId}}" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" class="btn btn-danger btn-sm" value="Remove">
                            </form>


                        </td>
                    </tr>

                    @endforeach
                    <tr>
                        <td class="table-image"></td>
                        <td></td>
                        <td class="small-caps table-bg" style="text-align: right">Subtotal</td>
                        <td>{{ Cart::instance('default')->subtotal() }}</td>
                        <td></td>
                        <td></td>
                    </tr>


                    <tr class="border-bottom">
                        <td class="table-image"></td>
                        <td style="padding: 40px;"></td>
                        <td class="small-caps table-bg" style="text-align: right">Your Total</td>
                        <td class="table-bg">{{  Cart::instance('default')->subtotal() }}</td>
                        <td class="column-spacer"></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>

            <a href="{{ url('/menu') }}" class="btn btn-primary btn-lg">Continue Shopping</a> &nbsp;
            <a href="{{ url('/checkout') }}" class="btn btn-primary btn-lg">Buy</a>


        @else

            <h3>You have no items in your shopping cart</h3>
            <a href="{{ url('/menu') }}" class="btn btn-primary btn-lg">Continue Shopping</a>

        @endif

        <div class="spacer"></div>

    </div> <!-- end container -->

@endsection

@section('extra-js')
    <script>
        (function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.quantity').on('change', function() {
                var id = $(this).attr('data-id')
                $.ajax({
                  type: "PATCH",
                  url: '{{ url("/cart") }}' + '/' + id,
                  data: {
                    'quantity': this.value,
                  },
                  success: function(data) {
                    window.location.href = '{{ url('/cart') }}';
                  }
                });
            });
        })();
    </script>
@endsection