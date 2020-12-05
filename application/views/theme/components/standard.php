<section style="padding: 50px 0;" >
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <h1 class="section-title" style="margin-bottom: 50px;">
                <?php echo $page->title; ?>
            </h1>
        </div>
        
        <div class="col-md-12 col-sm-12">
            
            <?php echo htmlspecialchars_decode($page->content); ?>
            
        </div>
    </div>
</div>
</section>