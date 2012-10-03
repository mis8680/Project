<?php

/**
 * MyIterator
 *
 * implement iterator interface
 */

class MyIterator implements Iterator {

    private $_content;
    private $_index = 0;

    //constructor
    public function __construct(array $content) {
        $this->_content = $content;
    }
    /**
     * current
     *   
     * @access  pulic 
     * @param void
     * @return returns current location
     */
    public function current() {
        return $this->_content[$this->_index];
    }
    /**
     * rewind
     *   
     * @access  pulic 
     * @param void
     * @return void, reset the location
     */
    public function rewind() {
        $this->_index = 0;
    }
    /**
     * valid
     *   
     * @access  pulic 
     * @param void
     * @return validation of the value
     */
    public function valid() {
        return isset($this->_content[$this->_index]);
    }
    /**
     * key
     *   
     * @access  pulic 
     * @param void
     * @return returns key value
     */
    public function key() {
        return $this->_index;
    }
    /**
     * next
     *   
     * @access  pulic 
     * @param void
     * @return increase current location
     */
    public function next() {
        $this->_index++;
    }

}

?>