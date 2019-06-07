<?php
    $downloadButton = '<i class="fas fa-download"></i>';

// Contact Variables
    $contactName = "Meaghan Bass";
    $contactTitle = "Front End Developer";
    $contactLocation = "San Diego, CA";
    $contactPhone = "619.770.7275";
    $contactEmail = "meaghan.bass@gmail.com";
    $contactWebsite = "meaghanbass.io";
    $contactGithub = "https://github.com/meaghanbass";
    $contactGithubHandle = "meaghanbass";
    $contactLinkedin = "https://www.linkedin.com/in/meaghanbass/";
    $contactTwitter = "https://twitter.com/meaghankb_?lang=en";
    $contactCodepen = "https://codepen.io/meaghanbass/";

// About Variables
    $aboutMe = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ligula orci, euismod a finibus ac, blandit ultricies risus. Etiam hendrerit, purus ac venenatis rutrum, augue libero tristique nibh, vel rhoncus lorem massa ut neque. Nulla egestas mattis suscipit. Pellentesque mattis, elit finibus lobortis malesuada, purus elit dignissim velit, et finibus nisl enim eu urna. Ut sodales nibh sed turpis tempor sagittis id vel arcu. Cras eu porta enim, ut accumsan eros. Fusce ut vestibulum mi.";

    $resumeSummary = "";

// Project Class Construction
    class Project {
        // Constructor
        public function __construct($projectTitle, $projectSummary, $projectTools, $projectLinkResume, $projectLinkGithub, $projectLinkDirect) {
            $this->projectTitle = $projectTitle;
            $this->projectSummary = $projectSummary;
            $this->projectTools = $projectTools;
            $this->projectLinkResume = $projectLinkResume;
            $this->projectLinkGithub = $projectLinkGithub;
            $this->projectLinkDirect = $projectLinkDirect;
        }

        public function displayProject() {
            echo '<h5 class="card-title">' . $this->projectTitle . '</h5>
                <p class="card-text">' . $this->projectSummary . '</p>
                <p class="tools">' . $this->projectTools . '</p>
                <a href="' . $this->projectLinkGithub . '" target="_blank" class="card-link git-link"><i class="fab fa-github"></i></a>
                <a href="' . $this->projectLinkDirect . '" target="_blank" class="card-link direct-link"><i class="fas fa-external-link-alt"></i></a>';
        }
    }


// Projects
    $project1 = new Project(
        "JobLister", 
        "Job board built with PHP and MySQL. Able to view jobs by category, add new listings, and update existing listings.", 
        "PHP | Bootstrap 4 | MySQL | Github", 
        "https://github.com/meaghanbass/CP-JobLister", 
        "https://github.com/meaghanbass/CP-JobLister", 
        "https://github.com/meaghanbass/CP-JobLister"
    );

    $project2 = new Project(
        "Quantum Developer Theme for VSCode",
        "Visual Studio Code theme based on the Firefox Developer Edition inspector colors. This theme is open-source and anyone is welcome to submit PRs, open issues, etc.",
        "JSON | Visual Studio Code | Github | Azure DevOps",
        "https://github.com/meaghanbass/GH-QuantumDeveloperTheme",
        "https://github.com/meaghanbass/GH-QuantumDeveloperTheme",
        "https://marketplace.visualstudio.com/items?itemName=MeaghanBass.quantum-developer-theme"
    );

    $project3 = new Project(
        "Global Web Properties",
        "Designed and built new site for web services company consisting of landing and contact pages. Built with Bootstrap and integrated with MailChimp. Continued to work with the agency on a per-project basis.",
        "Bootstrap | Sass | JS | PHP | Github",
        "http://globalwebproperties.com/",
        "https://github.com/meaghanbass/GHGlobalWebProperties",
        "http://globalwebproperties.com/"
    );

    $project4 = new Project(
        "Shirt Wholesaler, Inc",
        "Led project to redesign e-commerce website from an outdated early 2000s site to one that is modern and user-friendly. Integrated APIs to show real-time stock data and integrated payment processing with Authorize.net. Designed promotional images for website using Photoshop and Illustrator.",
        "HTML5 | CSS3 | JS | PHP | AWS",
        "https://www.shirtwholesaler.com/",
        "https://www.shirtwholesaler.com/",
        "https://www.shirtwholesaler.com/"
    );

?>