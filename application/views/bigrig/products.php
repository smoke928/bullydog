<div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Three Column Portfolio
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Three Column Portfolio</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <?php foreach ($categories as $category): ?>
            
	            <div class="col-md-4 img-portfolio">
	                <a href="portfolio-item.html">
	                    <img class="img-responsive img-hover" src="../../../assets/images/<?= $category['image_name'] ?>" alt="">
	                </a>
	                <h3>
	                    <a href="portfolio-item.html"><?= $category['name'] ?></a>
	                </h3>
	                <p><?= $category['description'] ?></p>
	            </div>
	            
            <?php endforeach; ?>
        </div>
        <!-- /.row -->

        
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        

    