<?php

namespace ___NAMESPACE___;

class ___CLASS___ ##extends##
{
    ##construct##

    ####################################################################################################################
    ###   CRUD operations   ############################################################################################

    /**
     * Create / Insert
     * Usage example:
     *      $Animal = new Animal();
     *      $Animal->setColor('red');
     *      $Animal->setSize('small');
     *      $Animal->setName('Mr. Shrimp');
     *      $Animal->create();
     */
    public function create()
    {
        #create()#
    }

    /**
     * Read / Select one by primary key
     */
    public function __TODO__read()
    {
        #read()#
    }

    /**
     * Update
     */
    public function __TODO__update()
    {
        #update()#
    }

    /**
     * Delete
     */
    public function __TODO__delete()
    {
        #delete()#
    }

    ####################################################################################################################

    public function getOne($what = '*', $where = [], $orderBy = [], $limitOffset = [])
    {
        return parent::getOne($what = '*', $where = [], $orderBy = [], $limitOffset = []);
    }

    public function getAll($what = '*', $where = [], $orderBy = [], $limitOffset = [])
    {
        return parent::getOne($what = '*', $where = [], $orderBy = [], $limitOffset = []);
    }

    /**
     * @param array $content - the array before INSERT query is executed
     * @param array $result - the array AFTER the insert query is executed
     * @return array
     */
    public function afterInsert($content, $result)
    {
        // Can compare $content['?'] with $result['?']
        return $result;
    }
}