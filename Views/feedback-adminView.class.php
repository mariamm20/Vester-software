<?php
class feedbackView extends feedbackContr
{
    public function showFeedback()
    {
        $f_data= $this->getFeedback();


        foreach($f_data as $comments)
        {
            
            
        ?>    
            <div class="feature col">
                <h3><?php echo "USER ID" . " " . $comments['user_id'] ?></h3>  <!-- user id -->
                <h6><?php echo"PRODUCT ID" . " " . $comments['product_id'] ?></h6>   <!-- product id -->
                <p><?php  echo $comments['content'] ?></p> <!-- the comment on the product -->

                <a href="feedback.php?review=1&id=<?php echo $comments['id']; ?>" class="icon-link feed accepted">
                    Accept
                </a>
                <a href="feedback.php?review=0&id=<?php echo $comments['id']; ?>" class="icon-link feed rejected">
                    Reject 
                </a>
            </div> 
            
        <?php    
        
        }
        
       
        if (isset($_GET["review"]) and $_GET["review"] == 1)
        {
            $id = $_GET["id"];  //دي مش متعرفه برا اللوب comments عشان ال    url  في  id هنجيب ال 
            echo "accepted";
                       

            $this->Connect()->query("UPDATE feedback SET review = 1 WHERE id = $id ");
            
        }


        if (isset($_GET["review"]) and $_GET["review"] == 0 )
        {
            $id = $_GET["id"];
            echo "reject";
        

            $this->Connect()->query("UPDATE feedback SET review = 0 WHERE id = $id ");
            
          
        }
        


        

        

        
        
    }
    


}