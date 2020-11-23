<!-- == Footer Area Stare from here  ============== -->
<footer id="footer-area">
    <div class="container">
        <div class="row">
            <div class="footer-top">
                <div class="col-md-3">
                    <div class="footer-top-single">
                        <h4><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> Address</h4>
                        <p>Contact us with following address:</p>
                        <p>
                            <?php echo $contactInfo->content_address;?>
                        </p>
                        <p>
                            <span><i class="fa fa-volume-control-phone" aria-hidden="true"></i> <?php echo e($contactInfo->first_mobile); ?></span><br/>
                            <span><i class="fa fa-volume-control-phone" aria-hidden="true"></i> <?php echo e($contactInfo->second_mobile); ?></span>
                        </p>
                        <p>
                            Email: <?php echo e($contactInfo->contact_email); ?> <br/>
                            Web: <a href="http://shollaschoolcollege.edu.bd">shollaschoolcollege.edu.bd</a>
                        </p>
                    </div>
                </div><!--end col-md-3-->
                <div class="col-md-3">
                    <div class="footer-top-single">
                        <h4><span><i class="fa fa-link" aria-hidden="true"></i></span> Usefull Link</h4>
                        <ul class="usefull-education-link">
                            <li><a href="http://www.xiclassadmission.gov.bd/" target="_blank" title="College Admission"><i class="fa fa-external-link" aria-hidden="true"></i> Admission</a> </li>
                            <li><a href="http://deb108321.dhakaeducationboard.gov.bd" target="blank"><i class="fa fa-external-link" aria-hidden="true"></i> Govern Domain Address</a> </li>
                            <li><a href="http://www.banbeis.gov.bd/" target="blank"><i class="fa fa-external-link" aria-hidden="true"></i> Banbeis</a> </li>
                            <li><a href="http://www.dshe.gov.bd/" target="blank"><i class="fa fa-external-link" aria-hidden="true"></i> Directorate of Secondary& Higher Education</a> </li>
                            <li><a href="http://www.educationboard.gov.bd/" target="blank"><i class="fa fa-external-link" aria-hidden="true"></i> Bangladesh Education Board</a> </li>
                            <li><a href="http://eff.teletalk.com.bd" target="blank"><i class="fa fa-external-link" aria-hidden="true"></i> eFF</a> </li>
                            <li><a href="http://esif.teletalk.com.bd" target="blank"><i class="fa fa-external-link" aria-hidden="true"></i> eSIF</a> </li>
                            <li><a href="http://application.emis.gov.bd:4040/adminLogin.aspx" target="blank"><i class="fa fa-external-link" aria-hidden="true"></i> MPO-login</a> </li>
                            <li><a href="http://www.educationboardresults.gov.bd/regular/index.php" target="blank"><i class="fa fa-external-link" aria-hidden="true"></i> Bangladesh Education Board Result</a> </li>
                        </ul>
                    </div>
                </div><!--end col-md-3-->
                <div class="col-md-3">
                    <div class="footer-top-single">
                        <h4><span><i class="fa fa-location-arrow" aria-hidden="true"></i></span> Education Board</h4>
                        <ul class="usefull-education-link">
                            <li><a href="http://dhakaeducationboard.gov.bd/" target="blank"><i class="fa fa-external-link" aria-hidden="true"></i> Dhaka Education Board</a> </li>
                            <li><a href="http://www.educationboard.gov.bd/chittagong" target="blank"><i class="fa fa-external-link" aria-hidden="true"></i> Chittagong Education Board</a> </li>
                            <li><a href="http://www.educationboard.gov.bd/comilla/index.html" target="blank"><i class="fa fa-external-link" aria-hidden="true"></i> Comilla Education Board</a> </li>
                            <li><a href="http://www.educationboard.gov.bd/barisal/index.html" target="blank"><i class="fa fa-external-link" aria-hidden="true"></i> Borishal Education Board</a> </li>
                            <li><a href="http://www.educationboard.gov.bd/sylhet/index.html" target="blank"><i class="fa fa-external-link" aria-hidden="true"></i> Sylhet Education Board</a> </li>
                            <li><a href="http://esif.teletalk.com.bd" target="blank"><i class="fa fa-external-link" aria-hidden="true"></i> eSIF</a> </li>
                            <li><a href="http://www.educationboard.gov.bd/rajshahi/index.html" target="blank"><i class="fa fa-external-link" aria-hidden="true"></i> Rajshahi Ecucation Board</a> </li>
                            <li><a href="http://www.bmeb.gov.bd" target="blank"><i class="fa fa-external-link" aria-hidden="true"></i> Madrasa Education Board</a> </li>
                            <li><a href="http://www.bteb.gov.bd/" target="blank"><i class="fa fa-external-link" aria-hidden="true"></i> Bangladesh Technical Education Board</a> </li>
                        </ul>
                    </div>
                </div><!--end col-md-3-->
                <div class="col-md-3">
                    <div class="footer-top-single">
                        <h4><span><i class="fa fa-share-square-o" aria-hidden="true"></i></span> Social Network</h4>
                        
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FRatulkumar1992%2F&tabs=timeline&width=260&height=200&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="260" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                        
                    </div>
                </div><!--end col-md-3-->
            </div><!-- end footer-top -->
        </div><!-- end row -->
    </div><!-- end footer-top container -->

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>
                        SHOLLA HIGHER SECONDARY SCHOOL & College<br/>
                        Technical Support By <a href="http://shollaschoolcollege.edu.bd" title="SHOLLA HIGHER SECONDARY SCHOOL & College"><span>SC&C</span></a>
                    </h4>
                </div>
                <div class="col-md-6">
                    <div class="copy-right pull-right">
                        <ul class="clearfix">
                            <li><a href="<?php echo e(url('/')); ?>">Home</a> </li>
                            <li><a href="<?php echo e(url('/login')); ?>" target="blank">Login</a> </li>
                            <li><a href="<?php echo e(url('/contact-us')); ?>">Contact</a> </li>
                        </ul>
                        <p><?php echo date('Y'); ?> All Rights Reserved &copy; <a href="http://shollaschoolcollege.edu.bd/" title="Scholla School & College">Scholla School & College</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end footer-bottom -->
</footer>


<!-- ======================== Footer Area end id here      ================== -->






<script src="<?php echo e(asset('/front/')); ?>/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo e(asset('/front/')); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset('/front/')); ?>/js/datatables.min.js"></script>
<script src="<?php echo e(asset('/front/')); ?>/js/jquery.slicknav.min.js"></script>
<script src="<?php echo e(asset('/front/')); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo e(asset('/front/')); ?>/js/jquery.flexslider.js"></script>
<script src="<?php echo e(asset('/front/')); ?>/js/jquery.scrollUp.min.js"></script>

<script type="text/javascript" src="<?php echo e(asset('/front/')); ?>/source/jquery.fancybox.pack.js?v=2.1.7"></script>
<script type="text/javascript" src="<?php echo e(asset('/front/')); ?>/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php echo e(asset('/front/')); ?>/js/mixitup.min.js" ></script>
<script type="text/javascript" src="<?php echo e(asset('/front/')); ?>/js/jquery.fitvids.js" ></script>


<script src="<?php echo e(asset('/front/')); ?>/js/custome.js"></script>

<script>
    var mixer = mixitup('.all-teacher .teacher-list');
</script>

<script>
    function openTab(evt, cityName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("teacher");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active-info-nav", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active-info-nav";
    }
</script>


<script type="text/javascript">
    $(document).ready(function(){
        $('#nav>li').hover(function() {
            $(this).children('.drop').stop(true,false,true).fadeToggle(600);

        });

        $('#nav>li>a').click(function() {
            $(this).children('.drop>li>a').stop(true,false,true).fadeToggle(600);
        });

        $('.drop>li').hover(function() {
            $(this).children('.down').stop(true,false,true).slideToggle(400);
        });
    });
</script>

<script>
    $(document).ready(function() {
        $(".fancybox-button").fancybox({
            prevEffect		: 'none',
            nextEffect		: 'none',
            closeBtn		: false,
            helpers		: {
                title	: { type : 'inside' },
                buttons	: {}
            }
        });
    });
</script>

<script>
    $(window).load(function() {
        // Animate loader off screen
        $("#preloader").fadeOut("slow");;
    });
</script>

</body>
</html>