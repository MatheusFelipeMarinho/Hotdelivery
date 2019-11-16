<?php

namespace App\Hotdelivery\RegisterNewUser\Entities;


use App\Models\MasterUser;


class MasterUserEntity extends MasterUser
{

    /**
     * stores a masterUser
     *
     * @return void
     */
    public function store()
    {

        if ($this->isInsert()) {

            $this->status = 1;

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