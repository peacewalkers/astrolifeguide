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

    public function index()
    {
        return view('pages.thankyou');
    }

    public function dopayment(Request $request) {
        //Input items of form
        $success = true;

        $error = "Payment Failed";

        if (empty($_POST['razorpay_payment_id']) === false)
        {
            $api = new Api(config('app.razorpay'), config('app.razorsecret'));

            try
            {

                Log::info('Showing user profile for user: ');

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
                $error = 'Razorpay Error : ' . $e->getMessage();
            }
        }

        if ($success === true)
        {
            $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
        }
    }

    public function verify(Request $request) {

    }
}