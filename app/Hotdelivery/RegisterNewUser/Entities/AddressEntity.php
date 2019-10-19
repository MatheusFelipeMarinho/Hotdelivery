<?php

namespace App\Hotdelivery\RegisterNewUser\Entities;


use App\Models\Address;


class AddressEntity extends Address
{


    /**
     * store
     * @param int $id
     * @return void
     */
    public function store()
    {

        if ($this->isInsert()) {

            $this->status = 1;

        }

        $this->foreign_table = 'company';

        $this->save();

    }


    private function isInsert() 
    {

        return (!$this->id);

    }


}