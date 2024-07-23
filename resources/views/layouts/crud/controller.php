<?php

class  Controller  extends \App\Http\Controllers\Controller
{
    // Klass xususiyati sifatida e'lon qilamiz
    public $name;
    public $permission;

    function __construct()
    {
        $this->permission = "currency";
        $this->name = ucfirst(__("currency"));
        $this->middleware('permission:'.$this->permission.'-list|'.$this->permission.'-create|'.$this->permission.'-show|'.$this->permission.'-edit|'.$this->permission.'-delete', ['only' => ['index','store']]);
        $this->middleware('permission:'.$this->permission.'-create', ['only' => ['create','store']]);
        $this->middleware('permission:'.$this->permission.'-show', ['only' => ['show']]);
        $this->middleware('permission:'.$this->permission.'-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:'.$this->permission.'-delete', ['only' => ['destroy']]);
    }

    // Create uchun
    // ->with('success',  __("message.create_success", ['name' => $this->name]));

    // Update uchun
    // ->with('success', __("message.update_success", ['name' => $this->name]));

    // Delete uchun
    // ->with('success', __("message.delete_success", ['name' => $this->name]));


}