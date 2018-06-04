@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')


    <form method='POST' action='/library'>
        {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-5">
                <h1>Register</h1>
                <div class='details'>* Required fields</div>
                <br>
                <label for='songName'>* First Name</label>
                <input type="text"
                       class="form-control"
                       value='@if (isset($songName)){{ $songName }}@endif'
                       name='songName'
                       id='songName'>
                <br>
                <label for='artist'>* Last Name</label>
                <input type="text"
                       class="form-control"
                       value='@if (isset($artist)){{ $artist }}@endif'
                       name='artist'
                       id='artist'>
                <br>
                <label for='songLink'>* Street Address</label>
                <input type="text"
                       class="form-control"
                       value='@if (isset($songLink)){{ $songLink }}@endif'
                       name='songLink'
                       id='songLink'>
                <br>
                <label for='songComment'>* City</label>
                <input type="text"
                       class="form-control"
                       value='@if (isset($songComment)){{ $songComment }}@endif'
                       name='songComment'
                       id='songComment'>
                <br>
                <label for='stateName'>* State</label>

                <select class='form-control' name="state" id="state">
                    <option value="" selected="selected">Select a State</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>

                <div class='container-fluid'>

                </div>
                <br>
                <label for='songComment'>* Zip Code</label>
                <input type="text"
                       class="form-control"
                       value='@if (isset($songComment)){{ $songComment }}@endif'
                       name='songComment'
                       id='songComment'>
                <br>
                <label for='songComment'>* Your Age</label>
                <input type="text"
                       class="form-control"
                       value='@if (isset($songComment)){{ $songComment }}@endif'
                       name='songComment'
                       id='songComment'>
                <br>
                <label for='songComment'>* Your Age</label>
                <input type="text"
                       class="form-control"
                       value='@if (isset($songComment)){{ $songComment }}@endif'
                       name='songComment'
                       id='songComment'>
                <br>


                @if (count($errors) > 0)
                    <div class="alert alert-danger" role="alert">
                        @foreach($errors->all() as $error)
                            {{ $error }}
                            <br>
                        @endforeach
                    </div>
                @endif
                <button type="submit" class="btn btn-primary">Submit Registration</button>
            </div>
            <div class="col-lg-3">
                <h3>2018 Graham Jarvis Colorado School</h3><br><br>
                <h4>
                    DATES: Aug 14 and 15, 2018<br>
                    LOCATION: Crested Butte, Colorado<br><br><br>
                    <ul>
                        <li>Note #1: Please note that there will be no refunds if you can't make it or cancel.</li>
                        <li>Note #2: This school (2-day event) costs $600 per student/rider.</li>
                        <li>Note #3: Your registration is not complete until we process your payment and send you confirmation.</li>
                        <li>Note #4: Bring your own food.</li>
                        <li>Note #5: Campsites and lodging is available. Please let us know where you plan to stay.</li>
                        <li>Note #6: The school starts in the morning around 9AM or 10AM.</li>
                        <ul>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
    </form>
@endsection