<section class="contact-container">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="contactbox">
                    <div class="contact-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h5 class="title">address</h5>
                    <p class="description">
                        <?php echo $setting->address; ?>
                    </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="contactbox">
                    <div class="contact-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h5 class="title">call us</h5>
                    <p>Phone 1 : <?php echo @$phone['primary']; ?> </p>
                    <p>Phone 2 : <?php echo @$phone['secondary']; ?> </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="contactbox">
                    <div class="contact-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <h5 class="title">Email</h5>
                    <p>Email 1 : <?php echo @$email['primary']; ?> </p>
                    <p>Email 2 : <?php echo @$email['secondary']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="" style="background-color:#f6f6f6;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 single-contact-us">
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
                        <div class="col-md-6 col-sm-6 form-input">
                            <h4>First Name</h4>
                            <input class="input" class="name" name="name" required="" type="text" >
                        </div>
                        <div class="col-md-6 col-sm-6 form-input">
                            <h4>Last Name</h4>
                            <input class="input" name="name" required="" type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 form-input">
                            <h4>Your Email</h4>
                            <input class="input" name="email" required="" type="email">
                        </div>
                        <div class="col-md-6 col-sm-6 form-input">
                            <h4>Phone Number</h4>
                            <input class="input" name="name"  required="" type="text">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 form-input">
                            <h4>Message</h4>
                            <textarea class="input" required=""></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <input class="btn btn-info" value="Send Message" type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12" style="padding:0;margin:0;">
                <iframe width="100%" height="300" class="" src="<?php echo $setting->map_code; ?>" style="border:0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>