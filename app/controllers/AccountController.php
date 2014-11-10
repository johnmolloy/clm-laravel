<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 10/11/2014
 * Time: 00:06
 */
class AccountController extends BaseController {

    public function getCreate() {
        return View::make('account.create');
    }

    public function postCreate() {
        $validator = Validator::make(Input::all(),
            array(
                'email' => 'required|email',
                'username' => 'required|min:3',
                'password' => 'required|min:6',
                'password_confirm' => 'required|same:password',
                'type' => 'required',
                'phone' => 'required',
                'website' => 'required'
            )
        );

        if($validator->fails()) {
            return Redirect::route('account-create')
                ->withErrors($validator)
                ->withInput();
        } else {
            // Create account
            $advertisername = Input::get('username');
            $secret = Input::get('password');
            $advertisertype = Input::get('type');
            $contactno = Input::get('phone');
            $website = Input::get('website');

            $create = Advertiser::create(array(
                'advertisername' => $advertisername,
                'secret' => Hash::make($secret),
                'advertisertype' => $advertisertype,
                'contactno' => $contactno,
                'website' => $website

            ));

            if($user) {
                return Redirect::route('home')
                    ->with('global', 'Thank you for registering, we will contact you shortly to confirm your account');
            }
        }

    }
}