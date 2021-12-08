<?php
class feedbackContr extends Db
{
    protected function getFeedback()
    {
        $stmt = $this->Connect()->query("SELECT * from  feedback");
        $f_data = $stmt->fetchAll();
        return $f_data;

    }

}