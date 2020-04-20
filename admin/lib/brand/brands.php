<?php
class brands
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function __destruct()
    {
    }
    
    /**
     * Set friendly columns\' names to order tables\' entries
     */
    public function setOrderingValues()
    {
        $ordering = [
            'id' => 'ID',
            'name' => 'name',
            'image' => 'image',
            'category id ' => 'category'
        ];

        return $ordering;
    }
}
?>
