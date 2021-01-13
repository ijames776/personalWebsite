<!-- Custom CSS -->
<link rel="stylesheet" href="css/navigation_style.css">

<nav class="topnav" id="topnav">
    <a href="index.php">Home</a>
    <div class="dropdown" id="Projects">
        <button onclick="dropdownopen('Projects')" class="dropbtn" id="ProjectsButton">Projects <i class="fas fa-angle-right"></i></button>
        <div class="dropdown-content" id="ProjectsContent">
            <a class='dropdown-item' href='projects.php?source=descriptions'>Project Descriptions</a>
            <div class="dropdown" id="C++">
                <button onclick="dropdownopen('C++')" class="dropbtn" id="C++Button">C++ <i class="fas fa-angle-right"></i></button>
                <div class="dropdown-content" id="C++Content">
                    <a href="http://www.geekfiregames.com/baseball" target="_blank">RJames Baseball</a>
                    <a href="projects.php?source=retrosheet">Retrosheet Converter</a>
                </div>
            </div>
            <div class="dropdown" id="Javascript">
                <button onclick="dropdownopen('Javascript')" class="dropbtn" id="JavascriptButton">Javascript <i class="fas fa-angle-right"></i></button>
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
        document.getElementById(id+"Button").innerHTML = id + ' <i class="fas fa-angle-down"></i>';
    } else {
        document.getElementById(id+"Button").innerHTML = id + ' <i class="fas fa-angle-right"></i>';
    }
    document.getElementById(id+"Content").classList.toggle("show");
}

/* If the user clicks outside the menu, the menu closes */
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");

    for (var i = 0; i < dropdowns.length; i++) {
      if (dropdowns[i].classList.contains('show')) {
        buttonID = dropdowns[i].id.substring(0, dropdowns[i].id.length - 7);
        dropdownopen(buttonID);
      }
    }
  }
}
</Script>

