<?php
$catStmt    = $this->db->query('SELECT * FROM faq_categories');
$categories = $catStmt->result();
?>

<section class="faq">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h1 class="section-title">
                    Frequently Asked Questions
                </h1>
                <p class="section-short-description">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
            </div>
            <div class="col-md-12">
                <!-- panel-group -->
                <div class="panel-group" id="accordion-faq" role="tablist" aria-multiselectable="true">

                    <?php
                    foreach ($categories as $cat) :
                        $faqSql  = 'SELECT * FROM faqs WHERE category_id = ?';
                        $stmtFaq = $this->db->query($faqSql, array($cat->id));
                        $faqs = $stmtFaq->result();

                        if ($stmtFaq->num_rows() > 0) :
                            ?>

                            <div class="faq-heading col-md-12">
                                <h4><?php echo $cat->category_name; ?></h4>
                            </div>

                            <?php foreach ($faqs as $faq) : ?>
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading<?php echo $cat->id.'-'.$faq->id; ?>">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo url_title($cat->category_name).'-'.$faq->id; ?>" aria-expanded="true" aria-controls="collapseOne">
                                                    <?php echo $faq->title; ?>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="<?php echo url_title($cat->category_name).'-'.$faq->id; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $cat->id.'-'.$faq->id; ?>">
                                            <div class="panel-body">
                                                <?php echo htmlspecialchars_decode($faq->content); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endforeach;
                        endif;
                    endforeach;
                    ?>
                </div>
                <!-- /.panel-group -->
            </div>
        </div>
    </div>
</section>

<!-- call-us -->
<section class="call-us">
    <div class="container">
        <div class="row">
            <h4><?php echo @$title['talkUs']; ?></h4>
            <a href="<?php echo @$link['talkUs']; ?>" class="btn"><?php echo @$title['talkUsbtn']; ?></a>
        </div>
    </div>
</section>
<!-- /.call-us -->