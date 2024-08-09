<?php $this->load->view('labindia_view/layout/head_view.php'); ?>

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/news-n-event.css">

<div class="custom-container">
    <!-- panel-1 start -->
    <div class="panel background_color-3">
        <section class="event-news-section">
            <div class="container-fluid">
                <div class="row news-bg-image">
                    <div class="banner-content text-left">
                        <h2 class="subtitle">Any subtitle for this page</h2>
                        <h1 class="tagline">Tagline here for event and news page</h1>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="water-mark">
                            <div class="water-mark-bg">
                                <img src="<?php echo base_url() ?>assets/images/Logo.png" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="news-item">
                                    <h3>10th Annual Food Quality & Safety Congress India 2024</h3>
                                    <p>Venue: Delhi</p>
                                    <p>Date: 22-02-2024 to 23-02-2024</p>
                                    <a id="openPopup1" class="know-more-btn" data-title="Free popular templates" data-content="Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Excepteur sint occaecat cupidatat non proident." data-image="<?php echo base_url() ?>assets/images/certificate.png"><span class="arrow-icon">>>> </span>Know More</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="news-item">
                                    <h3>10th Annual Food Quality & Safety Congress India 2024</h3>
                                    <p>Venue: Delhi</p>
                                    <p>Date: 22-02-2024 to 23-02-2024</p>
                                    <a id="openPopup2" class="know-more-btn" data-title="Free popular templates" data-content="Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Excepteur sint occaecat cupidatat non proident." data-image="<?php echo base_url() ?>assets/images/certificate.png"><span class="arrow-icon">>>> </span>Know More</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="news-item">
                                    <h3>10th Annual Food Quality & Safety Congress India 2024</h3>
                                    <p>Venue: Delhi</p>
                                    <p>Date: 22-02-2024 to 23-02-2024</p>
                                    <a id="openPopup3" class="know-more-btn" data-title="Free popular templates" data-content="Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Excepteur sint occaecat cupidatat non proident." data-image="<?php echo base_url() ?>assets/images/certificate.png"><span class="arrow-icon">>>> </span>Know More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- panel-1 end -->
</div>

<!-- Popup structure -->
<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close">&times;</span>
        <div class="row mt-4">
            <div class="col-md-6">
                <img id="popupImage" src="" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <div class="pop-content text-white">
                    <h1 id="popupTitle">Default Title</h1>
                    <p id="popupContent">Default content goes here...</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.know-more-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            var popup = document.getElementById('popup');
            var title = this.getAttribute('data-title');
            var content = this.getAttribute('data-content');
            var image = this.getAttribute('data-image');

            document.getElementById('popupTitle').innerText = title;
            document.getElementById('popupContent').innerText = content;
            document.getElementById('popupImage').src = image;

            popup.style.display = 'flex';
            setTimeout(function() {
                popup.style.bottom = '0';
            }, 10);
        });
    });

    document.querySelector('.close').addEventListener('click', function() {
        var popup = document.getElementById('popup');
        popup.style.bottom = '-100%';
        setTimeout(function() {
            popup.style.display = 'none';
        }, 200); // Match the duration of the animation
    });
</script>

<!-- Load jQuery first -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Load Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Your custom script to initialize Owl Carousel -->
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: true,              // Enable looping
            margin: 10,              // Set the margin between items
            nav: true,               // Display navigation arrows
            dots: true,              // Enable dot navigation
            autoplay: true,          // Enable autoplay
            autoplayTimeout: 3000,   // Set autoplay speed (in milliseconds)
            autoplayHoverPause: true,// Pause on hover
            responsive:{
                0:{
                    items:1          // 1 item per slide on small screens
                },
                600:{
                    items:2          // 2 items per slide on medium screens
                },
                1000:{
                    items:3          // 3 items per slide on large screens
                }
            }
        });
    });
</script>





<?php $this->load->view('labindia_view/layout/footer_view.php'); ?>