<?php

namespace App\Hotdelivery\RegisterNewUser\Entities;


use App\Models\Company;


class CompanyEntity extends Company
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

        $this->setCnpjPrefix();

        $this->save();

    }


    /**
     * getCnpPrefix
     *
     * @return void
     */
    private function setCnpjPrefix() 
    {

        $this->cnpj_prefix = substr($this->cnpj, 0, 8); 

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