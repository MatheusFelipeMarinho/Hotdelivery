<?php

namespace App\Hotdelivery\RegisterNewUser\Entities;


use App\Models\User;


class UserEntity extends User
{


    /**
     * store
     *
     * @return bool
     */
    public function store()
    {

        if ($this->isInsert()) {

            $this->status = 1;

            $this->is_master_user = 0;

        }

        $this->save();

        return true;

    }


    /**
     * stores a masterUser setting status as defautl 1
     *
     * @return bool
     */
    public function storeAsMasterUser()
    {

        if ($this->isInsert()) {

            $this->status = 1;

            $this->is_master_user = 1;
        }


        $this->save();

        return true;

    }


    /**
     * check if is insert or update based on id value
     *
     * @return void
     */
    private function isInsert() 
    {

        return (!$this->id);

    }


}