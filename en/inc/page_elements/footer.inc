        <footer>
            <div class="footer-section first">
                <h3>SITE MAP</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="representatives.php">Representatives</a></li>
                    <li><a href="members.php">Members</a></li>
                    <li><a href="documents.php">Documents</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="../index.php" style="margin:0;"><img src="../img/flag2.png"></a></li>
                </ul>
            </div>
            <div class="footer-section second">
                <h3>ASSOCIATION BIM SRBIJA</h3>
                <table>
                    <tr>
                        <td>Company Number:</td>
                        <td>28229194</td>
                    </tr>
                    <tr>
                        <td>Tax Identification Number:</td>
                        <td>110013370</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>Višnjićeva 8, 11000 Beograd</td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td>office@bimsrbija.rs</td>
                    </tr>
                    <tr>
                        <td>Tel:</td>
                        <td>+381 11 205 4092; +381 11 205 4095</td>
                    </tr>
                </table>                
            </div>
            <div class="footer-section contact">
                <h3>Send Us A Message</h3>
                <form action="index.php" method="post">
                    <span><i class="fas fa-user"></i></span>
                    <input type="text" name="name">
                    <span><i class="fas fa-envelope-open-text"></i></span>
                    <input type="text" name="email">
                    <p name="msg"><i class="fas fa-envelope"></i></p>
                    <textarea name="message"></textarea>
                    <p><input type="submit" name="submit" value="SEND"></p>
                </form>
                <?php
                    function string_prepare($str){
                        $str = str_replace("<", "&lt;", $str);
                        $str = str_replace(">", "&gt;", $str);
                        $str = trim($str);
                        $str = htmlspecialchars($str);
                        return $str;
                    }

                    if(isset($_POST["submit"])){
                        $name = string_prepare($_POST['name']);
                        $mail = string_prepare($_POST['email']);
                        $message = string_prepare($_POST['message']);

                        $mail_to = 'office.website.form@bimsrbija.rs';
                        $subject = 'Kontakt poruka sa sajta - Bim Srbija'; 
                        $message = "<html><body><table style='width:70%;border-collapse:collapse;font-size:14px;background-color:#E2D9DA;border:2px solid #C9B0B2;color:#FFFFFF;'><caption style='background-color:#C9B0B2;padding:4px 12px;font-size:16px;font-style:italic;'>Kontakt poruka sa sajta</caption><tr style='border: 1px dotted #FFFFFF;'><td style='background-color:#d7bec1;width:30%;padding:4px 12px;color:#2E2E3D;'>IME</td><td style='background-color:#E2D9DA;color:#2E2E3D;padding-left:12px;'>" . $name . "</td></tr><tr style='border: 1px dotted #FFFFFF;'><td style='background-color:#d7bec1;width:30%;padding:4px 12px;color:#2E2E3D;'>E-MAIL</td><td style='background-color:#E2D9DA;color:#2E2E3D;padding-left:12px;'>" . $mail . "</td></tr><tr style='border: 1px dotted #FFFFFF;'><td style='background-color:#d7bec1;width:30%;padding:4px 12px;color:#2E2E3D;color:#2E2E3D;'>PORUKA</td></tr><tr style='border: 1px dotted #FFFFFF;color:#2E2E3D;'><td colspan=2 style='background-color:#E2D9DA;padding:4px 12px;'>" . $message . "</td></tr></table></body>";

                        
                        $header = '';
                        $header .= 'MIME-Version: 1.0' . "\r\n";
                        $header .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                        
                        
                        mail($mail_to, $subject, $message, $header);

                    }
                  ?>
            </div>
        </footer>
        <div id="signature">
            <p>Copyright &#169; 2019 All Rights Reserved. Design &amp; Development : <a href="https:\/\/www.maricicmilos.com" target="_blank">Maričić Miloš</a></p>
        </div>