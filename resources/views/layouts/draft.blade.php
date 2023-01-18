DB::table('users')->insert([

'Name'=>$request->Name
'Age'=>$request->Age
'Weight'=>$request->Weight
'height'=>$request->height
'phone'=>$request->phone
'email'=>$request->email
]);
