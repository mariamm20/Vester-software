<?php
class feedbackContr extends Db
{
    protected function getFeedback()
    {
        $stmt = $this->Connect()->query("SELECT * FROM feedback where review IS NULL ");
        $f_data = $stmt->fetchAll();
        return $f_data;

        
        
    }

    
    
    
    

}

