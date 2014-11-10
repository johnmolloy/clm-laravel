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
        return 'Hello.';
    }
}