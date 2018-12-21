@extends('layouts.master')

@section('title', 'Rajo | Contact')

@section('content')
<br><br><br>
        <div class="row">
            <div class="col-md-12">
                <h1>Contact Me</h1>
                <hr>
                <form action="{{ url('contact/sent') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label name="email">Email:</label>
                        <input id="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="subject">Nama</label>
                        <input id="subject" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="message">Message:</label>
                        <textarea id="message" name="message" class="form-control"></textarea>
                    </div>

                    {!! Recaptcha::render() !!}
                    
                    <input type="submit" value="Send Message" class="btn btn-success">
                </form>
            </div>
        </div>
@endsection