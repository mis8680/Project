<?php
/**
 * Factory
 *
 * the create method takes string as a parameter,
 * if the string is 'android' it returns a android object. 
 * otherwise, it returns a IOS object
 */    
class Factory
{
    /**
     * create
     *   
     * @access  pulic 
     * @param String
     * @return returns an instance of each object
     */
    public static function create($class = null)
    {
        /*
        if($class == 'Android')
        {
            return new Android();
        }
        else
        {
            return new IOS();
        }
        */
        return ($class == 'Android')? new Android() : new IOS();
    }
    
    
}
?>