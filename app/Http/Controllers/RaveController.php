<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use KingFlamez\Rave;
use Rave;
//use App\Models\PhotoAfrica\Contestant;
use App\Models\PhotoAfrica\Payment;
use App\Models\PhotoAfrica\Contestant;

class RaveController extends Controller
{
    /**
     * Initialize Rave payment process
     * @return void
     */
    public function initialize()
    {
        //This initializes payment and redirects to the payment gateway
        //The initialize method takes the parameter of the redirect URL
        Rave::initialize(route('callback'));

        /***
         *For more functionality you can use more methods like the one below
         *setKeys($publicKey, $secretKey) - This is used to set the puvlic and secret key incase you wat to use another one different from your .env
         *setEnvironment($env) - This is used to set to either staging or live incase you want to use something different from your .env
         *
         *setPrefix($prefix, $overrideRefWithPrefix=false) -
         ***$prefix - To add prefix to your transaction reference eg. KC will lead to KC_hjdjghddhgd737
         ***$overrideRefWithPrefix - either true/false. True will override the autogenerate reference with $prefix/request()->ref while false will use the $prefix as your prefix
         **/

        //Rave::setKeys($publicKey, $secretKey)->setEnvironment($env)->setPrefix($prefix, $overrideRefWithPrefix=false)->initialize(route('callback'));

        //eg: Rave::setEnvironment('live')->setPrefix("flamez")->initialize(route('callback'));
        //eg: Rave::setKeys("PWHNNJ992838uhzjhjshud", "PWHNNJ992838uhzjhjshud")->setPrefix(request()->ref, true)->initialize(route('callback'));
        //eg: Rave::setKeys("PWHNNJ992838uhzjhjshud, "PWHNNJ992838uhzjhjshud")->setEnvironment('staging')->setPrefix("rave", false)->initialize(route('callback'));
    }

    /**
     * Obtain Rave callback information
     * @return
     */
    public function callback()
    {
        if (request()->cancelled && request()->txref) {
            //Handles Request if its cancelled
            //Payment might have been made before cancellation
            //This verifies if it's paid or not
            $data = Rave::verifyTransaction(request()->txref)->paymentCanceled(request()->txref);
        } elseif (request()->txref) {
            // Handle completed payments
            $data = Rave::verifyTransaction(request()->txref);
        } else {
            return redirect()->route('contest-registration')->withFlashDanger('Please pass the txref parameter!');
        }

//        dd($data);
        // Get the transaction from your DB using the transaction reference (txref)
        $payment = Payment::where('pageant_id', request()->txref)->latest()->first();
        $payment->callback_dump = print_r($data, true);
        // Check if you have previously given value for the transaction. If you have, redirect to your success page else, continue
        if (is_null($payment->paid_at)) {
            if ($data->data->chargecode == 00 || $data->data->chargecode == 0 && $data->data->currency == $payment->currency && $data->data->amount == $payment->amount) {
                $payment->paid_at = now();
                Contestant::where('pageant_id', $payment->pageant_id)->first()->update([
                    'paid_at' => $payment->paid_at,
                    'amount_paid' => $data->data->amount
                ]);
                $payment->save();
                return redirect()->route('contestant-profile', ['pageant_id' => $payment->pageant_id])->withFlashSuccess('Registration and payment was successful!');
            } else {
                return redirect()->route('contest-registration')->withFlashDanger('Payment was not completed');
            }
        } else {
            return redirect()->route('contestant-profile', ['pageant_id' => $payment->pageant_id])->withFlashSuccess('Registration and payment was successful!');
        }
        // Comfirm that the transaction is successful
        // Confirm that the chargecode is 00 or 0
        // Confirm that the currency on your db transaction is equal to the returned currency
        // Confirm that the db transaction amount is equal to the returned amount
        // Update the db transaction record (including parameters that didn't exist before the transaction is completed. for audit purpose)
        // Give value for the transaction
        // Update the transaction to note that you have given value for the transaction
        // You can also redirect to your success page from here

    }
}
