<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href="styles.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<title>Meaghan Bass | Developer</title>

</head>
<body>
    <!-- Site Wrapper -->
    <div class="container">
        <div class="row align-items-center page">
            <div class="col align-self-center text-center">
                <div class="row justify-content-center nav fixed-top pt-4 pb-3 bg-white">
                    <a href="#about" class="mr-3">About Me</a>
                    <a href="#portfolio" class="ml-3 mr-3">Portfolio</a>
                    <a href="#contact" class="ml-3">Contact</a>
                </div>

                    <script>
                        var $document = $(document),
                            $element = $('.nav'),
                            className = 'nav-shadow';

                            $document.scroll(function() {
                            if ($document.scrollTop() >= 200) {
                                // Change 50 to the value you require
                                // for the event to trigger
                                $element.addClass(className);
                            } else {
                                $element.removeClass(className);
                            }
                            });
                    </script>


                <h1>Meaghan Bass</h1>
                <h4>Front End Developer</h4>
                <div class="row justify-content-center social-links">
                    <a href="https://github.com/meaghanbass" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/meaghanbass/" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://twitter.com/meaghankb_?lang=en" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row align-items-center page" id="about">
            <div class="col align-self-center text-center">
                
                <h3 class="pb-5">About Me</h3>
                <div class="col-10 offset-1 col-sm-6 offset-sm-3">
                    <p>Front end pro. Back end student.</p>
                    <p>Functionality + Creativity</p>
                    <p>Passionate about improving web functionality and creating unique experiences.</p>
                </div>
                
            </div>
        </div>

        <div class="row justify-content-center pt-5" id="portfolio">
            <div class="col-12 text-center pb-5 pt-5">
                <h3>Portfolio</h3>
            </div>

            <div class="card w-75" >
                <div class="card-body">
                    <h5 class="card-title">JobLister</h5>
                    <p class="card-text">Job board built with PHP and MySQL. Able to view jobs by category, add new listings, and update existing listings.</p>
                    <p class="tools">PHP | Bootstrap 4 | MySQL | Github</p>
                    <a href="https://github.com/meaghanbass/CP-JobLister" target="_blank" class="card-link"><i class="fab fa-github"></i></a>
                    <!-- <a href="#" target="_blank" class="card-link"><i class="fas fa-external-link-alt"></i></a> -->
                </div>
            </div>
            
            <div class="card mt-4 w-75" >
                <div class="card-body">
                    <h5 class="card-title">Global Web Properties</h5>
                    <p class="card-text">Designed and built new site for web services company consisting of landing and contact pages. Built with Bootstrap and integrated with MailChimp. Continued to work with the agency on a per-project basis.</p>
                    <p class="tools">Bootstrap | Sass | JS | PHP | Github</p>
                    <a href="https://github.com/meaghanbass/GHGlobalWebProperties" target="_blank" class="card-link"><i class="fab fa-github"></i></a>
                    <a href="http://globalwebproperties.com/" target="_blank" class="card-link"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>

            <div class="card mt-4 w-75" >
                <div class="card-body">
                    <h5 class="card-title">Shirt Wholesaler, Inc</h5>
                    <p class="card-text">Led project to redesign e-commerce website from an outdated early 2000s site to one that is modern and user-friendly. Integrated APIs to show real-time stock data and integrated payment processing with Authorize.net. Designed promotional images for website using Photoshop and Illustrator.</p>
                    <p class="tools">HTML5 | CSS3 | JS | PHP | AWS</p>
                    <!-- <a href="#" target="_blank" class="card-link"><i class="fab fa-github"></i></a> -->
                    <a href="https://www.shirtwholesaler.com/" target="_blank" class="card-link"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
        </div>

        <div class="row align-items-center page" id="contact">
            <div class="col align-self-center text-center">
                
                <h3 class="pb-5">Contact</h3>
                <div class="col-10 offset-1 col-sm-6 offset-sm-3">
                    <p>meaghan.bass@gmail.com</p>
                    <p>https://github.com/meaghanbass</p>
                </div>
                
            </div>
        </div>

        <div class="row align-items-center page" id="contact2">
            <div class="w-50 mx-auto">
            <?php include 'contact.php'; ?>
            </div>
        </div>

        <div class="footer text-center pt-5">
            <h6>Made with <i class="fas fa-heart" style="color:#bd1b1b;"></i>. Assistance from <i class="fas fa-paw"></i>.</h6>
            <h6>&copy; 2019 - Meaghan Bass</h6>
        </div>

    </div>
    <!-- End Site Wrapper -->
</body>
</html>