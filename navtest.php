<!-- Custom CSS -->
<link rel="stylesheet" href="css/style.css">
<style>
/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  /* overflow: hidden; */
  display: flex;
  flex-direction: row;
}

/* Style the links inside the navigation bar */
.topnav a {
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Add an active class to highlight the current page */
.active {
  background-color: #0000ff;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
  /* float: left; */
}

/* Style the dropdown button to fit inside the topnav */
.dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  text-align: left;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  flex-direction: column;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  /* float: none; */
  color: black;
  /* display: block; */
  text-align: left;
}

.dropdown .dropdown {
  width: 100%;
  position: relative;
}

.dropdown .dropdown .dropbtn {
  /* float: none; */
  color: black;
  width: 100%;
  padding: 14px 16px;
}

/* Style the dropdown content (hidden by default) */
.dropdown .dropdown .dropdown-content {
	top: 0%;
	left: 100%;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropbtn:hover {
  background-color: #555;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover, .dropdown-content .dropbtn:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dopdown menu when it has this class */
.show {
  display: flex;
}

/* Media Queries */

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }

  .topnav a.icon {
    float: right;
    display: block;
  }

  .topnav.responsive {position: relative;}

  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}

  .topnav.responsive .dropdown-content {position: relative;}

  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>

<nav class="topnav" id="topnav">
    <a href="index.php">Home</a>
    <div class="dropdown" id="Projects">
        <button onclick="dropdownopen('Projects')" class="dropbtn" id="ProjectsButton">Projects +</button>
        <div class="dropdown-content" id="ProjectsContent">
            <a href="http://www.geekfiregames.com/baseball" target="_blank">RJames Baseball</a>
            <a href="projects.php?source=retrosheet">Retrosheet Converter</a>
            <div class="dropdown" id="Javascript">
                <button onclick="dropdownopen('Javascript')" class="dropbtn" id="JavascriptButton">Javascript +</button>
                <div class="dropdown-content" id="JavascriptContent">
                    <a href="projects.php?source=quotegenerator">Quote Generator</a>
                    <a href="projects.php?source=infinityscroll">Infinity Scroll</a>
                </div>
            </div>
            <a href="projects.php?source=fishing101">Fishing 101</a>
        </div>
    </div>
    <a href="https://github.com/ijames776" target="_blank">GitHub</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <a href="javascript:void(0);" class="icon" onclick="toggleTopBar()"><i class="fas fa-bars"></i></a>
</nav>

<!-- Scripts -->
<Script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function toggleTopBar() {
    var x = document.getElementById("topnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

/* Toggle between the dropown menu being open or closed */
function dropdownopen(id) {
    if (document.getElementById(id+"Content").className === "dropdown-content") {
        document.getElementById(id+"Button").innerHTML = id + ' -';
    } else {
        document.getElementById(id+"Button").innerHTML = id + ' +';
    }
    document.getElementById(id+"Content").classList.toggle("show");
}
</Script>

