<?php include ('header.php') ?>
<!-- ==============================================
    ** Inner Banner **
    =================================================== -->
<div class="inner-banner blog banner-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="content">
                    <h1>Gallery</h1>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- ==============================================
    ** Gallery **
    =================================================== -->
<section class="campus-tour padding-lg">
    <!-- gallery filter -->
    <div class="container text-center">
        <div class="isotopeFilters">
            <ul class="gallery-filter clearfix">
                <li class="active"><a href="#" data-filter="*">All</a></li>
                <li><a href="#" data-filter=".images">Media Gallery</a></li>
                <li><a href="#" data-filter=".video">Video Gallery</a></li>

            </ul>
        </div>
    </div>
    <!-- end filter -->
    <ul class="gallery clearfix isotopeContainer">
        <li class="isotopeSelector contest">
            <div class="overlay">

                <a class="galleryItem" href="images/gallery/1-big.jpg"><span class="icon-enlarge-icon"></span></a>
            </div>
            <figure><img src="images/gallery/1.jpg" class="img-responsive" alt=""></figure>
        </li>
        <li class="isotopeSelector images">
            <div class="overlay">

                <a class="galleryItem" href="images/gallery/2-big.jpg"><span class="icon-enlarge-icon"></span></a>
            </div>
            <figure><img src="images/gallery/2.jpg" class="img-responsive" alt=""></figure>
        </li>
        <li class="isotopeSelector images">
            <div class="overlay">

                <a class="galleryItem" href="images/gallery/3-big.jpg"><span class="icon-enlarge-icon"></span></a>
            </div>
            <figure><img src="images/gallery/3.jpg" class="img-responsive" alt=""></figure>
        </li>
        <li class="isotopeSelector images">
            <div class="overlay">

                <a class="galleryItem" href="images/gallery/4-big.jpg"><span class="icon-enlarge-icon"></span></a>
            </div>
            <figure><img src="images/gallery/4.jpg" class="img-responsive" alt=""></figure>
        </li>
        <li class="isotopeSelector  images">
            <div class="overlay">

                <a class="galleryItem" href="images/gallery/5-big.jpg"><span class="icon-enlarge-icon"></span></a>
            </div>
            <figure><img src="images/gallery/5.jpg" class="img-responsive" alt=""></figure>
        </li>
        <li class="isotopeSelector images">
            <div class="overlay">

                <a class="galleryItem" href="images/gallery/6-big.jpg"><span class="icon-enlarge-icon"></span></a>
            </div>
            <figure><img src="images/gallery/6.jpg" class="img-responsive" alt=""></figure>
        </li>
        <li class="isotopeSelector images">
            <div class="overlay">

                <a class="galleryItem" href="images/gallery/7-big.jpg"><span class="icon-enlarge-icon"></span></a>
            </div>
            <figure><img src="images/gallery/7.jpg" class="img-responsive" alt=""></figure>
        </li>
        <li class="isotopeSelector  video">
            <div class="overlay">

            <a href="#" class="more" data-toggle="modal"
                    data-target="#exampleModal"><span class="icon-gallery-more-arrow"></span></a>
            </div>

            <figure><img src="images/gallery/8.jpg" class="img-responsive" alt="" ></figure>
        </li>








    </ul>
    <div class="text-center">
        <ul class="pagination blue">
            <li> <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left"
                            aria-hidden="true"></i> Back</span> </a> </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li> <a href="#" aria-label="Next"> <span aria-hidden="true">Next <i class="fa fa-angle-right"
                            aria-hidden="true"></i></span> </a> </li>
        </ul>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">The ClassRoom</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/qKklTR4tZ_U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          
        </div>
    </div>
</div>


<?php include ('footer.php') ?>