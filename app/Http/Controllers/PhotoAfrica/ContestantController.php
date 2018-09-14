<?php

namespace App\Http\Controllers\PhotoAfrica;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PhotoAfrica\Contestant;
use App\Http\Requests\PhotoAfrica\ContestantCreateRequest;
use App\Models\PhotoAfrica\Payment;

class ContestantController extends Controller
{
    public function registrationForm (){
        return view('frontend.photoafrica.registration');
    }

    public function processRegistration (ContestantCreateRequest $request)
    {
            $contestant = new Contestant();
            $contestant->first_name = $request->first_name;
            $contestant->last_name = $request->last_name;
            $contestant->phone_number = $request->phone_number;
            $contestant->email = $request->email;
            $contestant->occupation = $request->occupation;
            $contestant->hobbies = $request->hobbies;
            $contestant->country = $request->country;
            $contestant->city = $request->city;
            $contestant->description = $request->description;
            $contestant->pageant_id = 'PA18' . substr(time(), 4, 5).random_int(200, 400);
        \Cloudder::upload($request->file('photograph'));
        $c=\Cloudder::getResult();
//        dd($c);
        $contestant->avatar_location = $c['url'];
        $contestant->avatar_format = $c['format'];
        $contestant->avatar_filename = $c['public_id'];
        $contestant->avatar_version = $c['version'];
        $contestant->avatar_resource_type = $c['resource_type'];
        $contestant->avatar_type = $c['type'];
        $contestant->avatar_width = $c['width'];
        $contestant->avatar_height = $c['height'];
//        http://res.cloudinary.com/photoafrica/image/upload/v1536673057/x6seys66vzwa7y0jtzv2.jpg
        $contestant->avatar_thumbnail_url = 'http://res.cloudinary.com/'.env('CLOUDINARY_CLOUD_NAME').'/'.$c['resource_type'].'/'.$c['type'].'/c_thumb,g_face,h_300,w_300/'.$c['public_id'].'.'.$c['format'];
//            $contestant->avatar_location = 'http://localhost/photoafrica/public/appy/images/team-3.jpg';
//            $contestant->avatar_type = 'jpg';
            $contestant->save();

            $payment = new Payment();
            $payment->pageant_id = $contestant->pageant_id;
            $charge = get_country_amount_currency($contestant->country);
            $payment->amount = $charge['amount'];
            $payment->currency = $charge['currency'];
            $payment->country_code = $charge['country_code'];
            $payment->save();
            return view('frontend.photoafrica.startPayment', ['contestant' => $contestant, 'payment' => $payment]);
    }

    public function contestantProfile($pageant_id){
        $contestant = Contestant::where('pageant_id', $pageant_id)->first();
        if(!is_null($contestant)){
            return view('frontend.photoafrica.contestantProfile', ['contestant' => $contestant]);
        }else{
            return back()->withFlashDanger('Invalid Pageant ID');
        }

    }

    public function gallery(){
        $contestants = Contestant::whereNotNull('paid_at')->latest()->paginate(6);

//        dd($contestants);
        return view('frontend.photoafrica.contestantsGallery', compact('contestants'));
    }
}
