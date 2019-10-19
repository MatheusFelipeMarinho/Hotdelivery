<?php

namespace App\Hotdelivery\RegisterNewUser\Services;



class RegisterNewAccount
{


    /**
     * register new 
     *
     * @param array $data
     * @return bool
     */
    public function register(array $data)
    {
        /**
         *  params 
         * 
         *  $data['user_name']        
         *  $data['company_name']
         *  $data['email']       
         *  $data['password']    
         */


        // validate if email exists 
        
        
        // create master user
        $masterUser = new MasterUserEntity();
        
        $masterUser->user_name      = $data['user_name'];
        $masterUser->company_name   = $data['company_name'];
        $masterUser->user_email     = $data['email'];
        
        $masterUser->store();

        // create user
        $user = new UserEntity();
        
        $user->master_user_id = $masterUser->id;
        $user->name           = $data['user_name'];
        $user->email          = $data['email'];
        $user->password       = $data['password'];
        
        $user->storeAsMasterUser();

        // create company
        $company = new CompanyEntity();

        $company->master_user_id = $masterUser->id;
        $company->name           = $data['company_name'];
        $company->person_type = 'j';
        $company->crt = '1';
        
        $company->store();

        // create company address
        $address = new AddressEntity();
        $address->master_user_id = $company->master_user_id;
        $address->foreign_id     = $company->id;

        $address->store();


       

    }
   
}