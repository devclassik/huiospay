<?php

namespace App\Http\Controllers;

use App\Models\AccountSetup;
use App\Models\Business_Detail;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Alert;
use Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**this method control the homepage view */
    public function homePage()
    {
        return view('frontend.home');
    }

     /**this method control the about view */
     public function homeAbout()
     {
         return view('frontend.pages.about');
     }
    /**this method control the contact us view */
    public function homeContact()
    {
        return view('frontend.pages.contact');
    }
    /**this method control the setup view */
    public function homeSetup()
    {
        return view('frontend.pages.registerAccount');
    }

    /**this method control the setup save account for general */
    public function saveSetup(Request $request)
    {
        $this->validate($request, [
            'mlbn' => 'required',
            'sn'   => 'required',
            'ra'   => 'required',
            'st'   => 'required',
            'iha'  => 'required'
        ]);
        $username = "huiospay" . random_int(1000, 9999);
        $password = str::random(4);
        $data =  AccountSetup::create([
            'merchant_legal_business_name'         => $request->mlbn,
            'store_name'                           => $request->sn,
            'store_type'                           => $request->st,
            'residential_address'                  => $request->ra,
            'is_huiospay_user'                     => $request->iha,
            'username'                             => $username,
            'password'                             => $password,

        ]);
//        dd($data->id); //the id of created user
        if ($request->iha === 'no'){
            Alert::success('Congrats', 'You\'ve Successfully Registered');
//            Session::flash('success', "Account created Successfully,");
            return redirect('noAccount/'.$data->id);
        }
//        Session::flash('success', "Account Created Successfully,");
        Alert::success('Congrats', 'You\'ve Successfully Registered');

        return redirect('yesAccount/'.$data->id);
//        return view('frontend.pages.yesHuiospayAgent');

    }

    /**this method control the *view* of fresh merchant */
    public function noAgent($id)
    {
//        dd($id);
        return view('frontend.pages.noHuiospayAgent',compact('id'));
    }

    /**this method control saving the free merchant fully */
    public function noAgentSetup(Request $request,$id)
    {
//        dd($request);
        //for picture upload
        $pictureName = $request->picture->getClientOriginalName();
        $picturePath = 'picture' . $pictureName;

        $isFileUploaded = Storage::disk('public')->put($picturePath, file_get_contents($request->picture));

        // File URL to access the video in frontend
        $urlOne = Storage::disk('public')->url($picturePath);

        $this->validate($request, [
            'st'                => 'required',
            'tt'                => 'required',
            'fn'                => 'required',
            'tnos'              => 'required',
            'pt'                => 'required',
            'state'             => 'required',
            'address'           => 'required',
            'htn'               => 'required',
            'bpn'               => 'required',
            'ocn'               => 'required',
            'bpe'               => 'required',
            'cpe'               => 'required',
            'bpt'               => 'required',
            'cpt'               => 'required',

        ]);
        Business_Detail::create([
            'user_id'                                     =>$id,
            'business_type'                               => $request->st,
            'type_of_terminal'                            => $request->tt,
            'features_needed'                             => $request->fn,
            'no_terminal_needed'                          => $request->tnos,
            'payment_type'                                => $request->pt,
            'business_state'                              => $request->state,
            'business_address'                            => $request->address,
            'state_location'                              => $request->statelocation,
            'main_business_person_name'                   => $request->bpn,
            'main_business_person_email'                  => $request->bpe,
            'main_business_person_tel'                    => $request->bpt,
            'owner_business_person_name'                  => $request->ocn,
            'owner_business_person_email'                 => $request->cpe,
            'owner_business_person_tel'                   => $request->cpt,
            'image_path'                                  => $picturePath,
            'highest_no_transaction'                      => $request->htn,
        ]);
        $details = [
            'title' => $request->bt.' '.$request->address,
            'body' => $request->tnos.' '.$request->htn
        ];
//        dd($details);
        \Mail::to('alomajaopemipo8@gmail.com')->send(new SendMailable($details));
        Alert::success('Congrats', 'You\'ve Successfully Registered');

        return redirect('/');
//        return view('frontend.pages.yesHuiospayAgent');
    }

    /**this method control the setup view of existing merchant */
    public function yesAgent($id)
    {
        //        dd($id);
        return view('frontend.pages.yesHuiospayAgent', compact('id'));
    }

    /**this method control saving the free merchant fully */
    public function yesAgentSetup(Request $request,$id)
    {
//        dd($id, $request);

        $this->validate($request, [
            'nmlbn'                       => 'required',
            'nsn'                         => 'required',
            'address'                     => 'required',
            'state'                       => 'required',
            'nst'                         => 'required',
            'htn'                         => 'required',
            'tnos'                        => 'required',

        ]);
        Business_Detail::create([
            'user_id'                                     =>$id,
            'new_merchant_legal_name'                     =>$request->nmlbn,
            'new_store_name'                              =>$request->nsn,
            'business_address'                            => $request->address,
            'business_state'                              => $request->state,
            'business_type'                               => $request->nst,
            'highest_no_transaction'                      => $request->htn,
            'no_terminal_needed'                          => $request->tnos,
            'state_location'                              => $request->statelocation,
        ]);
        $details = [
            'title' => $request->nmlbn.' '.$request->address,
            'body' => $request->tnos.' '.$request->htn
        ];
//        dd($details);
        \Mail::to('alomajaopemipo8@gmail.com')->send(new SendMailable($details));
        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return redirect('/');
    }

    /**this method control the setup view of cookies */
    public function homeCookies()
    {
        return view('frontend.pages.cookies');
    }

    /**this method control the setup view of privacyPolicy*/
    public function homePrivacy()
    {
        return view('frontend.pages.privacy');
    }

    /**this method control the setup view of terms and condition*/
    public function homeTerms()
    {
        return view('frontend.pages.terms');
    }

    /**this method control the setup view of agreement*/
    public function homeAgreement()
    {
        return view('frontend.pages.agreement');
    }

    /**this method control the setup view of faqs*/
    public function homeFaq()
    {
        return view('frontend.pages.faq');
    }

    /**this method control the setup view of registered merchant*/
    public function homeList()
    {
        $merchants = AccountSetup::Paginate(5);
        return view('frontend.pages.user-list', compact('merchants'));
    }


}
