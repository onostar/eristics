<div class="link_tags">
                <?php
                    $get_ad = $connectdb->prepare("SELECT * FROM ads WHERE ads_id = 2");
                    $get_ad->execute();
                    $ads = $get_ad->fetchAll();
                    foreach($ads as $ad):
                ?>
                <img src="<?php echo "media/".$ad->photo;?>" alt="Eristics ads">
                <?php 
                    endforeach;
                    if(!$get_ad->rowCount()){
                        echo "<div class='adds_non'>
                        <p>Paid Ads<br> Contact <a style='color:yellow;' class='contact_us' href='javascript:void(0)'>Admin</a></p>
                        </div>";
                    }
                ?>
            </div>
            <div class="link_tags">
                <?php
                    $get_ad = $connectdb->prepare("SELECT * FROM ads WHERE ads_id = 3");
                    $get_ad->execute();
                    $ads = $get_ad->fetchAll();
                    foreach($ads as $ad):
                ?>
                <img src="<?php echo "media/".$ad->photo;?>" alt="Eristics ads">
                <?php 
                    endforeach;
                    if(!$get_ad->rowCount()){
                        echo "<div class='adds_non'>
                        <p>Paid Ads<br> Contact <a style='color:yellow;' class='contact_us' href='javascript:void(0)'>Admin</a></p>
                        </div>";
                    }
                ?>
            </div>
            <div class="link_tags">
                <?php
                    $get_ad = $connectdb->prepare("SELECT * FROM ads WHERE ads_id = 4");
                    $get_ad->execute();
                    $ads = $get_ad->fetchAll();
                    foreach($ads as $ad):
                ?>
                <img src="<?php echo "media/".$ad->photo;?>" alt="Eristics ads">
                <?php 
                    endforeach;
                    if(!$get_ad->rowCount()){
                        echo "<div class='adds_non'>
                        <p>Paid Ads<br> Contact <a style='color:yellow;' class='contact_us' href='javascript:void(0)'>Admin</a></p>
                        </div>";
                    }
                ?>
            </div>
            <div class="link_tags">
                <?php
                    $get_ad = $connectdb->prepare("SELECT * FROM ads WHERE ads_id = 5");
                    $get_ad->execute();
                    $ads = $get_ad->fetchAll();
                    foreach($ads as $ad):
                ?>
                <img src="<?php echo "media/".$ad->photo;?>" alt="Eristics ads">
                <?php 
                    endforeach;
                    if(!$get_ad->rowCount()){
                        echo "<div class='adds_non'>
                        <p>Paid Ads<br> Contact <a style='color:yellow;' class='contact_us' href='javascript:void(0)'>Admin</a></p>
                        </div>";
                    }
                ?>
            </div>