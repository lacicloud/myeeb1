<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MyEEB1 Students' Application - Notes</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <script>
    function check_web_storage_support() {
    if(typeof(Storage) !== "undefined") {
        return(true);
    }
    else {
        alert("Web storage unsupported!");
        return(false);
    }
}

function display_saved_note() {
    if(check_web_storage_support() == true) {
        result = localStorage.getItem('note');
    }
    if(result === null) {
        result = "No note saved";
    }
    document.getElementById('area').value = result;
}

function save() {
    if(check_web_storage_support() == true) {
        var area = document.getElementById("area");
        if(area.value != '') {
            localStorage.setItem("note", area.value);
        }
        else {
            localStorage.removeItem("note");
        }
    }
}

  </script>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

  <!--/ Nav Start /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">My EEB<span class="color-b">1</span></a>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Main</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="alert('You can go to Vie Scolaire after 15:00 to view your absent teachers for the next day!')">Absences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="schedule.php">Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://cde.bissc.net">CdE Website</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notes.php">Notes</a>
          </li>
                    <li class="nav-item">
            <a class="nav-link" href="food.php">Canteen and Cafeteria</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Other
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="http://www.uccleparents.org/eureka-home/news-et-informations/?lang=en">Lost and Found</a>
              <a class="dropdown-item" href="https://www.instagram.com/cdeofficial/?__a=1
              ">CdE Instagram</a>
              <a class="dropdown-item" href="#" onclick="alert('WiFi codes available in Office365 Outlook!')">WiFi Codes</a>
              <a class="dropdown-item" href="https://sms.eursc.eu/login.php">SMS</a>
              <a class="dropdown-item" href="food.php">Canteen & Cafet</a>
              <a class="dropdown-item" href="http://www.eebxl1.eu/books.php">Booklist</a>
              <a class="dropdown-item" href="https://office365.eursc.eu/">Office365</a>
              <a class="dropdown-item" href="https://www.eeb1.com/en/practical-information/b-test-calendar/">B-test dates</a>
              <a class="dropdown-item" href="https://www.eeb1.com/en/school-holiday-calendar/">Official holiday calendar</a>
              <a class="dropdown-item" href="http://www.uccleparents.org/transport-home/organisation-du-service-transport/?lang=en">Bus Info</a>
              <a class="dropdown-item" href="about.php">About</a>
           </div>
          </li>
        </ul>
      </div>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->

<body>
<div class="center">

<h2 class="showing_text">Notes</h2>
<div class="showing_box">
     <div id="container">
            <textarea id="area" style="box-sizing: border-box;  width: 100%;" rows="10" cols="50"></textarea>
        </div><br>
        <div id="controls">
      <p><a href="javascript:save();" class="button">Save</a><br></p>
    </div>
</div>


<script>

var home = document.getElementById('container').innerHTML;
var controls = document.getElementById('controls').innerHTML;
display_saved_note();
document.getElementById('container').innerHTML = home;
document.getElementById('controls').innerHTML = controls;
display_saved_note();

</script>


</div>

 <!--/ footer Star /-->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">CdE EEB1 Contact</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                To contact the CdE, please visit our <a href="https://cde.bissc.net">website</a>, write us an email to cdeseleves@gmail.com, or check out our <a href="https://www.instagram.com/cdeofficial/?__a=1">Instagram</a>.
                To contact our school, please visit the official <a href="https://eeb1.com">website</a>.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Quick Links</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                
                 <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="https://eeb1.com">EEB1 Website</a>
                </li>

                 <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="http://www.uccleparents.org/?lang=en">APEEE Website</a>
                </li>

                 <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="https://cde.bissc.net">CdE Website</a>
                </li>

                 <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="http://markspolakovs.me/BACMAN/">BAC Practice (S7)</a>
                </li>

                 <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="https://bissc.net">BISSC</a>
                </li>

                 <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="http://eurscmag.eu/">Eurscmag</a>
                </li>

                 <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="https://www.eursc.eu/en">EURSC</a>
                </li>

                 <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="https://www.eursc.eu/en/European-Schools/studies/studies-organisation">Syllabuses</a>
                </li>

                 <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="https://www.facebook.com/CoSupES/">CoSup</a>
                </li>

                 <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="http://www.schola-europaea.eu/cree/">Complaints Board</a>
                </li>

                
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">By the CdE</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="https://cde.bissc.net">CdE Website</a>
                </li>
                 <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="https://www.instagram.com/cdeofficial/?__a=1">CdE Instagram</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="https://bissc.net/category/cde/">CdE News and Events</a>
                </li>
                </li>
                   <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="about.php">CdE Team</a>
                </li>
          
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="https://eeb1.com">EEB1 Website</a>
              </li>
              <li class="list-inline-item">
                <a href="https://cde.bissc.net">CdE Website</a>
              </li>
              <li class="list-inline-item">
                <a href="about.php">About the App</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
            <li class="list-inline-item">
                <a href="https://www.instagram.com/cdeofficial/?__a=1">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://cde.bissc.net">
                  <i class="fa fa-globe" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/CDEUccleTimes/">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">CdE EEB1</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
            Designed by <a href="https://bootstrapmade.com/">Leo Florea</a> and programmed by <a href="https://github.com/lacicloud">Laszlo Molnarfi</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
