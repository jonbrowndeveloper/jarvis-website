<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use View;
use Validator;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        /* first element of the array is the filepath with regards to the project. Backslash is included*/
        $nav = [
            '' => 'Home',
            'register' => 'Register',
        ];
        View::share(['nav' => $nav]);
    }

    public function home()
    {
        return view('main.home');
    }

    public function register()
    {
        return view('main.register');
    }

    public function addBiker(Request $request)
    {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $address = $request->input('address');
        $city = $request->input('city');
        $stateName = $request->input('stateName');
        $zipCode = $request->input('zipCode');
        $age = $request->input('age');
        $phoneNumber = $request->input('phoneNumber');
        $email = $request->input('email');
        $bikeModel = $request->input('bikeModel');
        $skillLevel = $request->input('skillLevel');
        $contactName = $request->input('contactName');
        $contactPhone = $request->input('contactPhone');
        $relation = $request->input('relation');

        $rules = [
            'firstName' => 'required|alpha_spaces',
            'lastName' => 'required|alpha_spaces',
            'address' => 'required',
            'city' => 'required|alpha_spaces',
            'stateName' => 'required',
            'zipCode' => 'required|regex:/\b\d{5}\b/',
            'age' => 'required',
            'phoneNumber' => 'required',
            'email' => 'required|email',
            'bikeModel' => 'required',
            'skillLevel' => 'required',
            'contactName' => 'required|alpha_spaces',
            'contactPhone' => 'required',
            'relation' => 'required|alpha_spaces'
        ];

        $request->validate($rules);

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withInput();
        } else {

            $data = [];

            // SEND MAIL
            /*
            $objDemo = new \stdClass();
            $objDemo->demo_one = 'Demo One Value';
            $objDemo->demo_two = 'Demo Two Value';
            $objDemo->sender = 'SenderUserName';
            $objDemo->receiver = 'ReceiverUserName';

            Mail::to("j.brown936@gmail.com")->send(new Email($objDemo));
            */
            // DISPLAY PAYMENT SCREEN

            return view('main.payment')->with([
                'firstName' => $firstName,
                'lastName' => $lastName,
                'address' => $address,
                'city' => $city,
                'stateName' => $stateName,
                'zipCode' => $zipCode,
                'age' => $age,
                'phoneNumber' => $phoneNumber,
                'email' => $email,
                'bikeModel' => $bikeModel,
                'skillLevel' => $skillLevel,
                'contactName' => $contactName,
                'contactPhone' => $contactPhone,
                'relation' => $relation
            ]);
        }
    }
}
