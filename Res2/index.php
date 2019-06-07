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

<?php include 'variables.php'; ?>

<title><?php echo $contactName; ?> | <?php echo $contactTitle; ?></title>

</head>
<body>

    <!-- Site Wrapper -->
    <div class="container">
        <div class="row align-items-center page">
            <div class="col align-self-center text-center">
                <div class="row justify-content-center nav fixed-top pt-4 pb-3 bg-white">
                    <a href="#about" class="mr-3">About Me</a>
                    <a href="#portfolio" class="ml-3 mr-3">Portfolio</a>
                    <a href="resume.php" target="_blank" class="ml-3 mr-3">Resume</a>
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


                <h1><?php echo $contactName; ?></h1>
                <h4><?php echo $contactTitle; ?></h4>
                <div class="row justify-content-center social-links">
                    <a href=<?php echo $contactGithub; ?> target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href=<?php echo $contactLinkedin; ?> target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href=<?php echo $contactTwitter; ?> target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href=<?php echo $contactCodepen; ?> target="_blank">
                        <i class="fab fa-codepen"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row align-items-center page" id="about">
            <div class="col align-self-center text-center">
                
                <h3 class="pb-5">About Me</h3>
                <div class="col-10 offset-1 col-sm-6 offset-sm-3">
                    <p><?php echo $aboutMe; ?></p>
                </div>
                
            </div>
        </div>

        <div class="row justify-content-center pt-5" id="portfolio">
            <div class="col-12 text-center pb-5 pt-5">
                <h3>Portfolio</h3>
            </div>

            <!-- JobLister -->
            <div class="card w-75 nodirectlink" >
                <div class="card-body">
                    <?php echo $project1->displayProject(); ?>
                </div>
            </div>

            <!-- Quantum Developer Theme -->
            <div class="card mt-4 w-75" >
                <div class="card-body">
                    <?php echo $project2->displayProject(); ?>
                </div>
            </div>
            
            <!-- Global Web Properties -->
            <div class="card mt-4 w-75" >
                <div class="card-body">
                    <?php echo $project3->displayProject(); ?>
                </div>
            </div>

            <!-- Shirt Wholesaler -->
            <div class="card mt-4 w-75 nogitlink" >
                <div class="card-body">
                    <?php echo $project4->displayProject(); ?>
                </div>
            </div>
        </div>

        <div class="row align-items-center page" id="contact">
            <div class="col align-self-center text-center">
                
                <h3 class="pb-5">Contact</h3>
                <div class="col-10 offset-1 col-sm-6 offset-sm-3">
                    <p><?php echo $contactEmail; ?></p>
                    <p><?php echo $contactGithub; ?></p>
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