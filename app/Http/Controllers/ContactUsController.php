<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\CarBrand;
use App\CarEngine;
use App\CarModel;
use App\CarGeneration;
use App\CarTuning;

use App\Events\NewCustomerHasContacted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUsController extends Controller implements ShouldQueue
{
    public function __construct(PHPMailer $phpMailer) {
        $this->phpMailer = $phpMailer;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     */
    public function store(Request $request)
    {
        $validator = $this->validator($request->all());

        // Validate the input and return correct response
        if ($validator->fails())
        {
            return response()->json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()

            ));
        }

        $brand_id = session('brand_id');
        $model_id = session('model_id');
        $generation_id = session('generation_id');
        $engine_id = session('engine_id');

        $contact_us = ContactUs::create([
            'name' => $request['name'],
            'license_plate' => $request['license_plate'],
            'email' => $request['email'],
            'phone_number' => $request['phone_number'],
            'message' => $request['message'],
            'brand_id' => $brand_id,
            'model_id' => $model_id,
            'generation_id' => $generation_id,
            'engine_id' => $engine_id,
        ]);

        event(new NewCustomerHasContacted($contact_us));

        return response()->json(array('success' => true, 'message' => '<ul class="unordered-checklist text-left p-3">
            <li>Bedankt voor uw aanvraag, wij contacteren u zo spoedig mogelijk. Mocht u direct iemand willen spreken bel dan tel 010-53 000 10</li>
        </ul>'), 200);
    }

    /**
     * Get a validator for an incoming Car Tuning request.
     *
     * @param array $data
     * @param string $car_tuning_id
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $rules = [
            'name' => ['required', 'string', 'min:2', 'max:190'],
            'license_plate' => ['required', 'string', 'min:4', 'max:10'],
            'email' => ['required', 'string'],
            'phone_number' => ['required'],
            'message' => ['required', 'string', 'max:5000']
        ];

        return Validator::make($data, $rules);
    }
}
