<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author pramod
 */
namespace Mastering\Itdesire\Api;
interface ItemRepositoryInterface {
    
    /**
     * @return \Mastering\Itdesire\Api\Data\ItemInterface[]
     */
    public function getList();
}
