<!-- portfolio -->
<section class="portfolio" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="portfolio-filter">

                    <li class="active fbtn-filter" data-filter="all">All</li>
                    <?php
                    $stmtPortfolio = $this->db->query(
                        'SELECT portfolio_categories.category_name , portfolios.* FROM portfolios
                        LEFT JOIN portfolio_categories ON  portfolios.category_id = portfolio_categories.id 
                        ORDER BY portfolios.id DESC Limit 12'
                    );

                    $portfolios = $stmtPortfolio->result();

                    $founded = [];

                    foreach ($portfolios as $item) :
                        if (!in_array($item->category_name, $founded)) :
                            ?>
                            <li class="fbtn-filter" data-filter="<?php echo url_title($item->category_name); ?>"><?php echo $item->category_name; ?></li>
                            <?php
                        endif;
                        $founded[] = $item->category_name;
                    endforeach;
                    ?>
                </ul>
            </div>
            <?php foreach ($portfolios as $item) : ?>
                <div class="portfolio-item col-md-4 col-sm-6 filter <?php echo url_title($item->category_name); ?>"  >
                    <div class="box">
                        <img src="<?php echo base_url().$item->thumbnail; ?>" alt="<?php echo $item->portfolio_name; ?>">
                        <div class="box-content">
                            <h3 class="title"><?php echo $item->portfolio_name; ?></h3>
                            <span class="post"><?php echo $item->category_name; ?></span>
                        </div>
                        <ul class="icon">
                            <li><a class="test-popup-link" href="<?php echo base_url().$item->thumbnail; ?>"><i class="fa fa-search"></i></a></li>
                            <li><a href="<?php echo base_url().'portfolio/'.$item->id.'/'.url_title($item->portfolio_name).'/'; ?>"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- /.portfolio -->

<!--<center>
    <nav class="pagination-outer" aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item active"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Next">
                    <span aria-hidden="true">»</span>
                </a>
            </li>
        </ul>
    </nav>
</center>-->

<?php
// require_once 'footer.php';
