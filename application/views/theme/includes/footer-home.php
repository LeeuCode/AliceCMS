<!-- footer -->
<section class="footer">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6 col-sm-12 map-cotent">
                <iframe class="frame-map" src="<?php echo $setting->map_code; ?>" style="border:0" allowfullscreen=""></iframe>
            </div>

            <div class="col-md-6 col-sm-12 contact-us">
                <div class="col-md-12 col-sm-12">
                    <h1 class="section-title">
                        Contact Us
                    </h1>
                    <p class="section-short-description">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="col-md-12 col-sm-12">
                    <form class="form-contect" action="#" method="post">
                        <div class="col-md-6 col-sm-6">
                            <h4>First Name</h4>
                            <input class="input" name="name" required="" type="text" >
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4>Last Name</h4>
                            <input class="input" name="name" required="" type="text">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4>Your Email</h4>
                            <input class="input" name="email" required="" type="email">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4>Phone Number</h4>
                            <input class="input" name="name"  required="" type="text">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <h4>Message</h4>
                            <textarea class="input" required=""></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <input class="send-message" value="Send Message" type="submit">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- /.footer -->