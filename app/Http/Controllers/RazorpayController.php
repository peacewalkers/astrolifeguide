<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;
use App\includes\Razorpay;
use App\Models\Payment;
use App\Models\UserManagementController;
use Redirect,Response;
use Session;
use Razorpay\Api\Errors\SignatureVerificationError;

class RazorpayController extends Controller
{

    private function api () {
        $api = new Api(config('app.razorpay'), config('app.razorsecret'));

    }

    public function index()
    {

        return view('pages.thankyou');
    }

    public function payment(Request $request) {
        //Input items of form
        $success = true;

        $error = "Payment Failed";

        if (empty($_POST['razorpay_payment_id']) === false)
        {
            $api = new Api(config('app.razorpay'), config('app.razorsecret'));

            try
            {
                // Please note that the razorpay order ID must
                // come from a trusted source (session here, but
                // could be database or something else)
                $attributes = array(
                    'razorpay_order_id' => $_POST['razorpay_order_id'],
                    'razorpay_payment_id' => $_POST['razorpay_payment_id'],
                    'razorpay_signature' => $_POST['razorpay_signature']
                );

                $api->utility->verifyPaymentSignature($attributes);
            }

            catch(SignatureVerificationError $e)
            {
                $success = false;
                print_r($attributes);
                $error = 'Razorpay Error : ' . $e->getMessage();
            }
        }

        if ($success === true)
        {
            Log::error('Showing thank you pay page ');

            return view('pages.thankpayd', ['attributes' => $attributes]);

        }
        else {

        }
    }

    public function verifyWebhookSignature($payload, $actualSignature, $secret)
    {

        Log::info('Showing webhook into');



        self::verifySignature($payload, $actualSignature, $secret);
    }

    public function verifypay($orderId) {

        $api = new Api(config('app.razorpay'), config('app.razorsecret'));

        $payments = $api->order->fetch($orderId);

        $link = $api->invoice->create(array(
                'type' => 'link',
                'amount' => $payments['amount'],
                'description' => 'test',
                'customer' => array(
                    'email' => 'bharghav.santosh@gmail.com',
                )
            )
        );

        $link->notifyBy('sms');

    }

}