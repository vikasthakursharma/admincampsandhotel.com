<?php

//function to send email to registered users
 function sendRegisterUserEmail($name,$email,$password)
{
  $data = [
            'name'   => $name,
            'email'    => $email,
            'password'=> $password
        ];
    Mail::send('backend.mail', $data, function($message) use ($data)
    {
        $message->from('growthprofessionalvikas@gmail.com');

        $message->to($data['email']);

        $message->subject('Email To Registerd User');
    });
}
?>
