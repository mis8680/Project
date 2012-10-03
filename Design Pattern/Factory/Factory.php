<?php
    
class Factory
{
    public static function create($class = null)
    {
        
        if($class == 'Android')
        {
            return new Android();
        }
        else
        {
            return new IOS();
        }
    }
    
    
}
?>