<?php $this->load->view('labindia_view/layout/head_view.php'); ?>

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/support.css">

<div class="custom-container">
    <div class="panel background_color-3">
        <div class="container-support">
            <div class="row">
                <div class="col-md-4">
                    <div class="content-support text-white">
                        <div class="title">Technical <br> Support</div>
                        <div class="subtitle">Presentation Template</div>
                        <p class="text-white">Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-md-8">
                        <div class="sp-img-container">
                            <img src="<?php echo base_url() ?>assets/images/support/support_2.jpg" alt="Technical Support">
                            <div class="sp-img-overlay"></div>
                            <div class="support-text">SUPPORT</div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="image-container">
                <img src="<?php echo base_url() ?>assets/images/support/support-section-1.png" alt="Technical Support">
                <div class="overlay"></div>
                <div class="support-text">SUPPORT</div>
            </div> -->
        </div>
    </div>

    <div class="panel">
        <section clas="learn-more-section">
            <div class="container-learn-more">
                <div class="container-cards">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="inner-cards text-center card-color-1 element-card-1">
                                <img src="assets/images/connect-images/icon-2.png" alt="img-1" />
                                <button>Free Trial</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="inner-cards text-center card-color-2 element-card-2">
                                <img src="assets/images/connect-images/icon-1.png" alt="img-1" />
                                <button class="btn-position-1">Speak to a Scientist</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="inner-cards text-center card-color-3 element-card-3">
                                <img class="image-learn-more" src="assets/images/connect-images/icon-3.png" alt="img-1" />
                                <button class="btn-position-2">Request a Quote</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="panel">
        <section class="Qualification-section" >
            <div class="custom-container-2">
                <div class="row">
                    <div class="col-md-4 title-section">
                        <h1>Qualification & Validation</h1>
                        <p>Our technical expertise in the field of analytical laboratory instrumentation for the past three decades has resulted in launching new instruments complying with International Standards in terms of Quality, Performance, Reliability, Regulatory and GLP/GMP. With 12 branches and 500 professionals all over India, the group has achieved rapid success in the past few years and evolved into a highly successful service and support organization, recognized all over India as a key supplier of state of the art instrumentation and reagents.</p>
                        <div class="logo">
                            <img src="labindia-logo.png" alt="Labindia Logo">
                            <p>Reserve the right to change all services may be customized to meet specific requirements information. Please contact your Labindia representative or complete and submit the Service and Support Contact Form.</p>
                        </div>
                    </div>
                    <div class="col-md-8 steps-section">
                        <div class="steps">
                            <div class="step-box" id="step1">
                                <h3>1</h3>
                            </div>
                            <div class="step-box" id="step2">
                                <h3>2</h3>
                            </div>
                            <div class="step-box" id="step3">
                                <h3>3</h3>
                            </div>
                            <div class="step-box" id="step4">
                                <h3>4</h3>
                            </div>
                        </div>
                        <div class="description">
                            <div id="desc1">
                                <span></span>
                                <h4>Performance Verification Test (PVT)</h4>
                                <p>The instrument meets suitability test requirements as per USP guidelines using USP tablets and reference standards.</p>
                            </div>
                            <div id="desc2">
                                <span></span>
                                <h4>Installation Qualification (IQ/OQ/PQ)</h4>
                                <p>Labindia verify the system meets specifications as well as certifies the system is set up and installed correctly, in the right environment and ready for operational qualifications and performance qualifications.</p>
                            </div>
                            <div id="desc3">
                                <span></span>
                                <h4>Preventative Maintenance (PM)</h4>
                                <p>Servicing of equipment to confirm continued proper operation per the manufacturer’s specifications including the replacement of parts, inspection and replacement of electronic components, connections, switches, motors and more.</p>
                            </div>
                            <div id="desc4">
                                <span></span>
                                <h4>On-site Repair</h4>
                                <p>Trained Engineers who can provide repair at your lab.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                document.getElementById('step1').addEventListener('click', function() {
                    activateStep('desc1');
                });
                document.getElementById('step2').addEventListener('click', function() {
                    activateStep('desc2');
                });
                document.getElementById('step3').addEventListener('click', function() {
                    activateStep('desc3');
                });
                document.getElementById('step4').addEventListener('click', function() {
                    activateStep('desc4');
                });

                function activateStep(stepId) {
                    var descriptions = document.querySelectorAll('.description div');
                    descriptions.forEach(function(desc) {
                        desc.classList.remove('active');
                    });
                    document.getElementById(stepId).classList.add('active');
                }
            </script>
        </section>
    </div>
</div>

<?php $this->load->view('labindia_view/layout/footer_view.php'); ?>