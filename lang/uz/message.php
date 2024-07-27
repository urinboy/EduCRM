<?php

return [

    'oops' => 'Voy! Kiritgan ma’lumotlaringiz bilan bog‘liq ayrim muammolar yuz berdi.',
    
    'submit_success' => ':name has been sent successfully!',
    'create_success' => ':name has been successfully created.',
    'update_success' => ':name has been successfully updated.',
    'delete_success' => ':name has been successfully deleted.',
    'view_details' => 'View :name details.',
    'delete_confirmation' => 'Are you sure you want to delete this :name?',
    'data_not_available'=> 'Data not available!',

    /*
    |  {{ __("create_success", ['name' => 'User']) }}
    |  {{ __("Are you sure you want to delete this :name?", ['name' => 'user']) }}
    |  
    |  * Controller da foydalanish
    |    ----------------------------------------------------------------------
    |    // Logic for creating the name
    |     $name = 'User'; // Example name name
    |    // After successfully creating the name
    |    $message = __("messages.create_success", ['name' => $name]);
    |    return redirect()->back()->with('success', $message);
    |    ----------------------------------------------------------------------
    |   public function store(Request $request, $name){
    |      $message = __("messages.create_success", ['name' => ucfirst($name)]);
    |      return redirect()->route("{$name}.index")->with('success', $message);
    |   }
    */
];