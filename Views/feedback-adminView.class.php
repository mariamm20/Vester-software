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
                            <h3><?php echo "USER ID" . " " . $comments['users_id'] ?></h3>         <!-- user id هعرض  -->
                            <h6><?php echo"PRODUCT ID" . " " . $comments['Products_id'] ?></h6>    <!-- product id هعرض-->
                            <p><?php  echo $comments['content'] ?></p> <!-- the comment on the product هعرض ال كومنت  --> 

                            <a href="feedback.php?state=accept" class="icon-link feed accepted">
                                Accept
                            </a>
                            <a href="feedback.php?state=reject" class="icon-link feed rejected">
                                Reject
                            </a>
            </div>

        <?php    
        }

       
    }
}