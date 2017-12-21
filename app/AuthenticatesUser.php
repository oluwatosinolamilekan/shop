<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ValidatesRequests;
class AuthenticatesUser extends Model
{
    //
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function invite()
    {
        $this->validateRequest()
            ->createToken
            ->send();
    }

    public function validaterequest()
    {
        $this->validate($this->request,[
            'email'=>'required|email|exist|:user'
            
        ]);

        return $this;
    }

    public function createToken()
    {

    }

}
