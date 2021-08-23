

<?php echo <<<EOT
<div class="header-column justify-content-end">
    <div class="header-row">
        <div class="header-nav header-nav-links order-2 order-lg-1">
            <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                <nav class="collapse" id="nav-main">
                    <ul class="nav nav-pills" id="mainNav">
                        <li>
                            <a class="nav-link" href="index.php">
                                Home
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="about-us.php">
                                About
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="services.php">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="nav-link" href="services.php">Overview</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="enterprise-dev.php">Enterprise Software Development</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="web-mobile.php">Web+Mobile app development</a>
                                </li>

                                <li>
                                    <a class="nav-link" href="consultancy.php">Consultancy&Outsourcing</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="process-automation.php">Process Automation</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="voice-chat-bot.php">Voice/Chat bot Services</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-link" href="contact-us.php">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                    <form role="search" action="page-search-results.html" method="get">
                        <div class="simple-search input-group">
                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                            <span class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="fa fa-search header-nav-top-icon"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

EOT;

?>

<script>
// Get the container element
// var btnContainer = document.getElementById("nav-main");

// Get all buttons with class="btn" inside the container
var btns = document.getElementsByClassName("nav-link");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active current-page-active", "");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active current-page-active";
    });
}
</script>