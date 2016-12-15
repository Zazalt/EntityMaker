<?php

namespace ___NAMESPACE___;

class ___CLASS___ ##extends##
{
    ##construct##

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

    /**
     * Insert or update
     */
    public function __TODO__save()
    {

    }

    /**
     * Update a DB entry
     */
    public function __TODO__update()
    {

    }

    /**
     * Delete a DB entry
     */
    public function __TODO__delete()
    {

    }
}