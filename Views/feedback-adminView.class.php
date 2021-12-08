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
                            <h3><?php $comments['users_id'] ?></h3>  <!-- user id -->
                            <h6><?php $comments['Products_id'] ?></h6>   <!-- product id -->
                            <p><?php $comments['content'] ?></p> <!-- the comment on the product -->

                            
                            <a href="#accepted" class="icon-link feed accepted">
                                Accept
                            </a>
                            <a href="#rejected" class="icon-link feed rejected">
                                Reject
                            </a>
            </div>

        <?php    
        }
    }
}