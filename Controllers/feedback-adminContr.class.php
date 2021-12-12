<?php
class feedbackContr extends Db
{
    protected function getFeedback()
    {
        $stmt = $this->Connect()->query("SELECT * from  feedback");
        $f_data = $stmt->fetchAll();
        return $f_data;


    if (isset($_GET['accept']))
    {
        
        $query = "UPDATE feedback SET status = 'accepted' where id =$comments[id] ";
        $this->Connect()->query($query);
    }

    if (isset($_GET['reject']))
    {
        
        $query = "UPDATE feedback SET status = 'rejected' where id =$comments[id] "; //   عشان المنتج الواحد انا ممكن احط عليه كومنتات كتير فكل كومنت هيكون ليه  "اي دي" بتاعهidاحنا هنا حطينا ال  
        $this->Connect()->query($query);
    }

    }
    
    

}