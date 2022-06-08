<?php

namespace App\Listeners;

use App\CarTuning;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use PHPMailer\PHPMailer\PHPMailer;

class EmailAdminListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(PHPMailer $phpMailer) {
        $this->phpMailer = $phpMailer;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $tuning  = '';
        Log::info('EmailAdminListener started');
        extract($event->contact_us->toArray());
        if (!is_null($brand_id) && !is_null($model_id) && !is_null($generation_id) && !is_null($engine_id)) {
            $tuning = CarTuning::from('car_tunings as ct')
                ->where(['ct.brand_id' => $brand_id, 'ct.model_id' => $model_id, 'ct.generation_id' => $generation_id, 'ct.engine_id' => $engine_id])
                ->with('brand', 'model', 'engine')
                ->first();
        }

        $subject = !empty($tuning) ? $tuning->brand->name . ' ' . $tuning->model->name . ' ' . $tuning->engine->name : env('ZOHO_SUBJECT');
        $this->phpMailer->setFrom("info@chiptuningrotterdam.nl", $subject);
        $this->phpMailer->addAddress("info@chiptuningrotterdam.nl");
        $this->phpMailer->Subject = $subject;
        $this->phpMailer->Body = view('email')->with(
            compact('name', 'license_plate', 'email', 'phone_number', 'message', 'tuning')
        )->render();
        $this->phpMailer->send();
        Log::info('EmailAdminListener ended');
    }
}
