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

// Project Variables
    // Create an object?
// $projectTitle = 
// $projectSummary = 
// $projectTools = 
// $projectLinkMain = 
// $projectLinkGithub = 
// $projectLinkDirect = 

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
        echo 
    }
}

?>


class Student {
    // constructor
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function say_name() {
        echo "My name is " . $this->first_name . " " . $this->last_name . ".\n";
    }
}

$alex = new Student("Alex", "Jones");
$alex->say_name();
