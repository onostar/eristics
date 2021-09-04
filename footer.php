<footer>
    <div id="main_footer">
        <!-- <div class="section" id="contactSection">
            <a href="about.php" title="Who we are"><i class="fas fa-users"></i> About us</a>
            <a class="contact_us" href="javascript:void(0);"><i class="fas fa-sms"></i> Contact us</a>
            <a href="archive.php" title="More news"><i class="fas fa-archive"></i> Archive</a>
            <a href="javascript:void(0);" class="ireports" title="Eye witness Update"><i class="fas fa-eye"></i> IReport</a>         
        </div> -->
        <!-- <div class="section" id="subscribeCats">
            
            <h3>Be the first to get latest updates</h3>
            <form action="controller/subscribe.php" method="POST" id="subscriptions">
                <input type="email" id="subscribe_email" name="subscribe_email" placeholder="Enter email">
                <button type="submit" id="subscribe" name="subscribe">Subscribe <i class="fas fa-paper-plane"></i></button>
            </form>
        
            
        </div>
        <div class="section" id="socialMedia">
            <h3>Follow us On Social Media</h3>
            <div class="social">
                <a target="_blank" href="https://facebook.com/temixempire" title="Temix empire on facebook"><img src="images/facebook_icon.png"></a>
                <a target="_blank" href="https://youtube.com/TemixEmpire" title="Temix empire on twitter"><img src="images/youtube_icon.png"></a>
                <a target="_blank" href="https://instagram.com/Temix_empire" title="Temix empire on instagram"><img src="images/instagram_icon.png"></a>
                <a target="_blank" href="https://linkedin.com/TemixEmpire" title="Connect with Temix empire on Linkedin"><img src="images/linkedin_icon.png"></a>
                <a target="_blank" href="https://wa.me/2348157985866" title="Chat on whatsapp"><img src="images/whatsapp_icon.png"></a>
                
            </div>
            
        </div> -->
    </div>
    <div id="secondary_footer">
        <p>All Rights Reserved. &copy; Eristics <?php echo date("Y"); ?>. Powered by <a href="https://onostar.github.io/onostar-media" title="Onostar media" target="_blank">Onostar Media</a></p>
    </div>
    <div class="toTop">
        <a href="#topHeader"><i class="fas fa-chevron-up"></i></a>
    </div>
    
    </footer>
    <div class="contact_form">
        
        <form action="controller/contact_us.php" method="POST">
            <div id="close_en">
                <a href="javascript:void(0)" title="Close"><i class="fas fa-window-close"></i></a>
            </div>
            <h2>Get in touch</h2>
            <input type="text" name="contact_name" id="contactName" placeholder="Enter Your Name" required>
            <input type="email" name="contact_email" id="contactEmail" placeholder="Enter Email">
            <input type="text" name="mail_subject" id="mail_subject" placeholder="Message Subject">
            <textarea name="contact_message" id="contactMessage" placeholder="Enter your message" cols="30" rows="10"></textarea>
            <button type="submit" name="submit_message" id="submit_message">Send Message<i class="fas fa-paper-plane"></i></button>
        </form>
    </div>
    <div class="appointment_page">
        <div class="result"></div>
        <div id="appointment_page">
            <div id="close">
                <a href="javascript:void(0)" title="Close"><i class="fas fa-window-close"></i></a>
            </div>
            <h2>Post Eye witness report</h2>
            <form method="POST" action="controller/i_report.php" enctype="multipart/form-data">
                <div class="inputs">
                    <div class="data">
                        <label for="customer_name">Full Name</label><br>
                        <input type="text" id="posted_by" name="posted_by" placeholder="James Awolowo" required>
                    </div>
                    <div class="data">
                        <label for="customer_phone">Title</label><br>
                        <input type="text" id="title" name="title" placeholder="Story title" required>
                    </div>
                </div>
                <div class="inputs">
                    
                    <div class="data">
                        <label for="service">Category</label><br>
                        <select name="category" id="category" required>
                            <option value="" selected>Select Category</option>
                            <?php
                                $get_category = $connectdb->prepare("SELECT * FROM categories ORDER BY category DESC");
                                $get_category->execute();
                                $rows = $get_category->fetchAll();
                                foreach($rows as $row):
                            ?>
                            <option value="<?php echo $row->category?>"><?php echo $row->category?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="data">
                        <label for="foto">Upload an image</label>
                        <input type="file" name="foto" id="foto">
                    </div>
                </div>
                <div class="inputs">
                    <div class="data" id="textarea">
                        <textarea name="details" id="details" rows="7" placeholder="Give a detailed description of your story"></textarea>
                    </div>
                    <div class="data">
                        <button type="submit" id="report" name="report">Post story <i class="fas fa-paper-plane"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    