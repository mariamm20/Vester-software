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
                            <h3><?php echo "USER ID" . " " . $comments['users_id'] ?></h3>  <!-- user id -->
                            <h6><?php echo"PRODUCT ID" . " " . $comments['Products_id'] ?></h6>   <!-- product id -->
                            <p><?php  echo $comments['content'] ?></p> <!-- the comment on the product -->

                            <a href="feedback.php?state=accept" class="icon-link feed accepted">
                                Accept
                            </a>
                            <a href="feedback.php?state=reject" class="icon-link feed rejected">
                                Reject
                            </a>
            </div>

        <?php    
        }

        if (isset($_GET['accept']))
        {
            
            $query = "UPDATE feedback SET status = 'accepted' where id =$comments[id] ";
            $this->Connect()->query($query);
        }

        if (isset($_GET['reject']))
        {
            
            $query = "UPDATE feedback SET status = 'rejected' where id =$comments[id] "; // احنا هنا حطينا ال  
            $this->Connect()->query($query);
        }
    }
}