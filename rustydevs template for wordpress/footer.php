     <!------------------------------modal----------------------------------->
     <?php include "php/modal.php" ?>
            <!-------------------------------modal end------------------------------>



            <!-- ---------------------footer-------------------------- -->
            <section id="footer-personal">
                <div class="footer-panel">
                    <div class="footer-style">
                        <div class="container">
                                <div class="footer-topboard"></div>
                                <div class="contact-text col-lg-9 col-md-5" > 
                                    <h5>Contact Us</h5>
                                    <p>Mobile Number: (PH) (+63) 953-378-3546</p><p> Landline Number: (085) 817-7645</p><p>Email: craigtrecher@gmail.com</p>
                                </div>

                                <hr class="ftr-hr">

                                <div class="copyright-text col-lg-9 col-md-5">
                                    <p>&copy; Copyright <strong>Rusty Devs 2020</strong>. All Rights Reserved</p>   
                                    <p>RustyDevs and its logo are RustyDevs trademarks or registered trademarks in the PH and elsewhere.</p>          
                                </div>
                        </div>    
                    </div>
                </div>
            </section>
            <!-- ---------------------footer end-------------------------- -->

        
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
        // aos anim enable
            AOS.init({
            disable: function() {
                //disable anim if screen is < 380
                var maxWidth = 380;
                return window.innerWidth < maxWidth;
            }
            });
        </script>
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/headerscript.js"></script>
        
        <!-- <script src="js/animateval.js"></script> -->

</body>
</html>