@extends('layouts.master')

@section('title', 'Checkout')

@section('content')
<br><br>
    <div class="container">
        <div style ="background-color: white"class="col-xl-9 mx-auto">
        @if (session()->has('success_message'))
            <div class="spacer"></div>
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="spacer"></div>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1 class="checkout-heading stylish-heading">Checkout</h1>
        <div class="checkout-section">
            <div>
                <form action="/checkout/complete" method="POST" id="checkout">
                    {{ csrf_field() }}
                    <h2>Data Diri</h2>

                    <div class="form-group">
                        <label for="nopem">No Pemesanan</label>
                            <input type="text" class="form-control"  name="nopem" value="{{$nopem}}" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control"  name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No Telp</label>
                        <input type="text" class="form-control"  name="no_telp"  required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control"  name="email" required>
                    </div>
                    <div class="half-form">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat"  required>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_pembayaran">Jumlah Pembayaran</label>
                            <input type="text" class="form-control" name="jumlah_pembayaran" value="{{ Cart::instance('default')->subtotal()}}" readonly required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="half-form">
                        <div class="form-group" form="checkout">
                            <label for="cara_pengambilan">Cara Pengambilan</label><br>
                            <select name="cara_pengambilan" form="checkout">
                                <option value="Ambil Di Toko">Ambil Di Toko</option>
                                <option value="GOJEK" >GOJEK</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tempat_pengambilan">Tempat Pengambilan</label><br>
                            <select form="checkout" name="tempat_pengambilan">
                                    <option value="Cabang Rawamangun">Cabang Rawamangun</option>
                                    <option value="Cabang Rawamangun">Cabang Bekasi</option>
                                    <option value="Cabang Rawamangun">Cabang Bintaro</option>
                                    <option value="Cabang Rawamangun">Cabang Permata Hijau</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="date">Tanggal Pengambilan</label>
                            <input type="datetime-local" class="form-control"  name="tanggal_pengambilan" min="2018-11-01T00:00"  required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="spacer"></div>

                    {!! Recaptcha::render() !!}
                   
                        <!-- Used to display form errors -->
                        <div id="card-errors" role="alert"></div>
                    </div>
                    <div class="spacer"></div>

                    <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>


                </form>
            </div>
            </div>



            {{-- <div class="checkout-table-container">
                <h2>Your Order</h2>

                <div class="checkout-table">
                    @foreach (Cart::content() as $item)
                    <div class="checkout-table-row">
                        <div class="checkout-table-row-left">
                            <img src="{{ productImage($item->model->image) }}" alt="item" class="checkout-table-img">
                            <div class="checkout-item-details">
                                <div class="checkout-table-item">{{ $item->model->name }}</div>
                                <div class="checkout-table-description">{{ $item->model->details }}</div>
                                <div class="checkout-table-price">{{ $item->model->presentPrice() }}</div>
                            </div>
                        </div> <!-- end checkout-table -->

                        <div class="checkout-table-row-right">
                            <div class="checkout-table-quantity">{{ $item->qty }}</div>
                        </div>
                    </div> <!-- end checkout-table-row -->
                    @endforeach

                </div> <!-- end checkout-table -->

                <div class="checkout-totals">
                    <div class="checkout-totals-left">
                        Subtotal <br>
                        @if (session()->has('coupon'))
                            Discount ({{ session()->get('coupon')['name'] }}) :
                            <br>
                            <hr>
                            New Subtotal <br>
                        @endif
                        Tax ({{config('cart.tax')}}%)<br>
                        <span class="checkout-totals-total">Total</span>

                    </div>

                    <div class="checkout-totals-right">
                        {{ presentPrice(Cart::subtotal()) }} <br>
                        @if (session()->has('coupon'))
                            -{{ presentPrice($discount) }} <br>
                            <hr>
                            {{ presentPrice($newSubtotal) }} <br>
                        @endif
                        {{ presentPrice($newTax) }} <br>
                        <span class="checkout-totals-total">{{ presentPrice($newTotal) }}</span>

                    </div>
                </div> <!-- end checkout-totals -->
            </div>

        </div> <!-- end checkout-section -->
    </div> --}}

@endsection

@section('extra-js')
    <script>
        (function(){
            // Create a Stripe client
            var stripe = Stripe('pk_test_JKVJPMynL8ckk7ivBxoroTlT');

            // Create an instance of Elements
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
              base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Roboto", Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                  color: '#aab7c4'
                }
              },
              invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
              }
            };

            // Create an instance of the card Element
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
            });

            // Add an instance of the card Element into the `card-element` <div>
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
              var displayError = document.getElementById('card-errors');
              if (event.error) {
                displayError.textContent = event.error.message;
              } else {
                displayError.textContent = '';
              }
            });

            // Handle form submission
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
              event.preventDefault();

              // Disable the submit button to prevent repeated clicks
              document.getElementById('complete-order').disabled = true;

              var options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('province').value,
                address_zip: document.getElementById('postalcode').value
              }

              stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                  // Inform the user if there was an error
                  var errorElement = document.getElementById('card-errors');
                  errorElement.textContent = result.error.message;

                  // Enable the submit button
                  document.getElementById('complete-order').disabled = false;
                } else {
                  // Send the token to your server
                  stripeTokenHandler(result.token);
                }
              });
            });

            function stripeTokenHandler(token) {
              // Insert the token ID into the form so it gets submitted to the server
              var form = document.getElementById('payment-form');
              var hiddenInput = document.createElement('input');
              hiddenInput.setAttribute('type', 'hidden');
              hiddenInput.setAttribute('name', 'stripeToken');
              hiddenInput.setAttribute('value', token.id);
              form.appendChild(hiddenInput);

              // Submit the form
              form.submit();
            }
        })();
    </script>
@endsection
