<!------------------------------contacto--------------------------------------------------->
<section id="contact" class="contact-section">
        <div class="contact-container">
            <div class="left-section">
                <p>The best industrial park in Torreón. <br> Get in touch!</p>
                <p>More connections:</p>
                    <div class="contact-icons">
                        <a href=""><i class="fas fa-envelope"></i></a>
                        <a href=""><i class="fas fa-phone-alt"></i></a>
                        <a href=""><i class="fab fa-whatsapp"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
            </div>
            <div class="right-section">
                <form action="./mail.php" method="post">
                    <div class="contact-row">
                        <div class="contact-name">
                            <label for="fname">Full name</label>
                            <input id="fname" type="text" name="fname" placeholder="John Doe">
                        </div>
                        <div class="contact-mail">
                            <label for="mail">Email Address</label>
                            <input id="mail" type="email" name="mail" placeholder="mail@example.com">
                        </div>
                    </div>
                    <label for="">Message</label>
                    <textarea id="message" name="message" rows="5" cols="50" placeholder="Hello, I’m interested in..."></textarea><br>
                    <input type="submit" class="btnSend" value="Send Message">
                </form>
            </div>
        </div>
    </section>
    <!------------------------------fin contacto--------------------------------------------------->