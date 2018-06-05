@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
            <h3 class="text-center">Thank you for submitting your information {{ $firstName }}</h3>
            <h4 class="text-center">Please submit payment to complete your registration</h4>
            <br>
            <br>
            <br>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="WTXSQ9H5DSAA6">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
        </div>
        <div class="col-lg-4">

        </div>
    </div>
@endsection