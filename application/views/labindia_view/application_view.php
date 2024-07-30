<?php $this->load->view('labindia_view/layout/head_view.php'); ?>

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/application.css">

<div class="custom-container">
    <section class="panel background_color-3">
        <div class="container-gallery">


            <div class="gallery-wrap">
                <div class="item item-1">
                    <div class="item-top-bar">
                        <h1>
                            Food and Beverage
                        </h1>
                    </div>

                    <div class="application-inner-content">
                        <h2>Heading 1</h2>
                        <p>This is the description for item 1.</p>
                    </div>
                </div>
                <div class="item item-2">
                    <div class="item-top-bar">
                        <h1>
                            Pharmaceutical
                        </h1>
                    </div>
                    <div class="application-inner-content">
                        <h2>Heading 1</h2>
                        <p>This is the description for item 1.</p>
                    </div>
                </div>
                <div class="item item-3">
                    <div class="item-top-bar">
                        <h1>
                            Environment
                        </h1>
                    </div>
                    <div class="application-inner-content">
                        <h2>Heading 1</h2>
                        <p>This is the description for item 1.</p>
                    </div>
                </div>
                <div class="item item-4">
                    <div class="item-top-bar">
                        <h1>
                            Chemical
                        </h1>
                    </div>
                    <div class="application-inner-content">
                        <h2>Heading 1</h2>
                        <p>This is the description for item 1.</p>
                    </div>
                </div>
                <div class="item item-5">
                    <div class="item-top-bar">
                        <h1>
                            Industrial & Applied Science
                        </h1>
                    </div>
                    <div class="application-inner-content">
                        <h2>Heading 1</h2>
                        <p>This is the description for item 1.</p>
                    </div>

                </div>
            </div>
        </div>


    </section>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const items = document.querySelectorAll('.item');
        const topBar = document.querySelector('.item-top-bar');

        items.forEach(item => {
            item.addEventListener('click', function() {
                const content = item.querySelector('.application-inner-content');

                if (item.classList.contains('expanded')) {
                    item.style.flex = '1';
                    item.classList.remove('expanded');
                    content.style.opacity = '0';
                    content.style.right = '-100%'; // Move off-screen
                    setTimeout(() => {
                        content.style.display = 'none';
                    }, 800); // Match this timeout to the fade out transition time
                    topBar.style.display = 'block'; // Show top bar
                } else {
                    // Reset all items
                    items.forEach(i => {
                        i.style.flex = '1';
                        i.classList.remove('expanded');
                        const iContent = i.querySelector('.application-inner-content');
                        if (iContent) {
                            iContent.style.opacity = '0';
                            iContent.style.right = '-100%'; // Move off-screen
                            setTimeout(() => {
                                iContent.style.display = 'none';
                            }, 800); // Match this timeout to the fade out transition time
                        }
                    });
                    // Expand the clicked item
                    item.style.flex = '100';
                    item.classList.add('expanded');

                    // Hide top bar
                    topBar.style.display = 'none';

                    // Delay the animation of the content
                    setTimeout(() => {
                        content.style.display = 'block';
                        setTimeout(() => {
                            content.style.right = '0'; // Slide in content
                            content.style.opacity = '1'; // Fade in content
                        }, 0); // Ensure it starts immediately after display block
                    }, 800); // Match this timeout to the flex transition time
                }
            });
        });
    });
</script>
<?php $this->load->view('labindia_view/layout/footer_view.php'); ?>