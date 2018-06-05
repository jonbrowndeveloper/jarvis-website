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
                <div class="form-group row">
                    <div class="col-xs-6">
                        <label for='firstName'>* First Name</label>
                        <input type="text"
                               class="form-control"
                               value='@if (isset($songName)){{ $songName }}@endif'
                               name='firstName'
                               id='firstName'>
                    </div>
                    <div class="col-xs-6">
                        <label for='lastName'>* Last Name</label>
                        <input type="text"
                               class="form-control"
                               value='@if (isset($artist)){{ $artist }}@endif'
                               name='lastName'
                               id='lastName'>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xs-6">
                        <label for='address'>* Street Address</label>
                        <input type="text"
                               class="form-control"
                               value='@if (isset($songLink)){{ $songLink }}@endif'
                               name='address'
                               id='address'>
                    </div>
                    <div class="col-xs-3">
                        <label for='city'>* City</label>
                        <input type="text"
                               class="form-control"
                               value='@if (isset($songComment)){{ $songComment }}@endif'
                               name='city'
                               id='city'>
                    </div>
                    <div class="col-xs-3">
                        <label for='stateName'>* State</label>

                        <select class='form-control' name="stateName" id="stateName">
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
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-xs-4">
                        <label for='zipCode'>* Zip Code</label>
                        <input type="text"
                               class="form-control"
                               value='@if (isset($songComment)){{ $songComment }}@endif'
                               name='zipCode'
                               id='zipCode'>
                    </div>
                    <div class="col-xs-4">
                        <label for='age'>* Your Age</label>
                        <input type="text"
                               class="form-control"
                               value='@if (isset($songComment)){{ $songComment }}@endif'
                               name='age'
                               id='age'>

                    </div>
                    <div class="col-xs-4">
                        <label for='phoneNumber'>* Phone Number</label>
                        <input type="text"
                               class="form-control"
                               value='@if (isset($songComment)){{ $songComment }}@endif'
                               name='phoneNumber'
                               id='phoneNumber'>

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xs-4">
                        <label for='email'>* Email Address</label>
                        <input type="text"
                               class="form-control"
                               value='@if (isset($songComment)){{ $songComment }}@endif'
                               name='email'
                               id='email'>
                    </div>
                    <div class="col-xs-4">
                        <label for='bikeModel'>* Make/Model of your Bike</label>
                        <input type="text"
                               class="form-control"
                               maxlength="4"
                               value='@if (isset($songComment)){{ $songComment }}@endif'
                               name='bikeModel'
                               id='bikeModel'>
                    </div>
                    <div class="col-xs-4">
                        <label for='skillLevel'>* Skill Level</label>
                        <select class='form-control' name="skillLevel" id="skillLevel">
                            <option value="" selected="selected">Enduro Skill Level</option>
                            <option value="Beginner">Beginner (<1 year)</option>
                            <option value="Intermediate">Intermediate (2-5 years)</option>
                            <option value="Advanced">Advanced (5+ years)</option>
                        </select>
                    </div>
                </div>
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
                        <li>Note #5: Campsites and lodging are available. Please let us know where you plan to stay.</li>
                        <li>Note #6: The school starts in the morning around 9AM or 10AM.</li>
                        <ul>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
    </form>
@endsection