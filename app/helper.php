<?php

use Illuminate\Http\Request as HttpRequest;

//function to send email to registered users
 function sendRegisterUserEmail($name,$email)
{
  $data = [
            'name'   => $name,
            'email'    => $email
        ];
    Mail::send('backend.mail', $data, function($message) use ($data)
    {
        $message->from('growthprofessionalvikas@gmail.com');

        $message->to($data['email']);

        $message->subject('Email To Registerd User');
    });
}

// uploadImage 
function uploadImage(HttpRequest $request, String $imageName, String $imagePath) {
    $bannerImageArr = array();

    // check if has file
    if ($request->hasFile($imageName)) {
        $files = $request->file($imageName);


        // loop of all files
        foreach ($files as $key => $image) {
            // store file name with extension
            $fileName = time() . $key . '.' . $image->getClientOriginalExtension();
            $bannerImageArr[] = $fileName;

            // upload image to uploads folder
            $image->storeAs($imagePath, $fileName);
        }
    }

    return $bannerImageArr;
}
