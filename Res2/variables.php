<?php
// Contact Variables
$contactName = "Meaghan Bass";
$contactTitle = "Front End Developer";
$contactLocation = "San Diego, CA";
$contactPhone = "619-770-7275";
$contactEmail = "meaghan.bass@gmail.com";
$contactWebsite = "www.meaghanbass.io";
$contactGithub = "https://github.com/meaghanbass";
$contactLinkedin = "https://www.linkedin.com/in/meaghanbass/";
$contactTwitter = "https://twitter.com/meaghankb_?lang=en";
$contactCodepen = "https://codepen.io/meaghanbass/#";

// About Variables
$aboutMe = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ligula orci, euismod a finibus ac, blandit ultricies risus. Etiam hendrerit, purus ac venenatis rutrum, augue libero tristique nibh, vel rhoncus lorem massa ut neque. Nulla egestas mattis suscipit. Pellentesque mattis, elit finibus lobortis malesuada, purus elit dignissim velit, et finibus nisl enim eu urna. Ut sodales nibh sed turpis tempor sagittis id vel arcu. Cras eu porta enim, ut accumsan eros. Fusce ut vestibulum mi.";

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
            <a href="' . $this->projectLinkGithub . '" target="_blank" class="card-link"><i class="fab fa-github"></i></a>
            <a href="' . $this->projectLinkDirect . '" target="_blank" class="card-link"><i class="fas fa-external-link-alt"></i></a>';
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
)


?>