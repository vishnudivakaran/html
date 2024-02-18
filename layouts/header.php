<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Project</title>
  <base href="/" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap-grid.min.css" integrity="sha512-EAgFb1TGFSRh1CCsDotrqJMqB2D+FLCOXAJTE16Ajphi73gQmfJS/LNl6AsjDqDht6Ls7Qr1KWsrJxyttEkxIA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css" />
  <link rel="stylesheet" href="reporter/assets/css/style.css" />
</head>

<body>

  <div class="container">
    <div class="headerAddSection">
      <img src="reporter/assets/images/header-add.png" alt="ad image" loading="lazy">
    </div>
  </div>
  <header>
    <div class="header">
      <div class="container">
        <div class="mainHeader">
          <div class="socialIcons">
            <a href="/reporter" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="/reporter" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="/reporter" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="/reporter" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            <a href="/reporter" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
          </div>
          <div class="logo">
            <a href="/reporter"><img src="reporter/assets/images/logo.svg" alt="logo image"></a>
            <div class="date mobile">
              <span>Nov 22, 2023</span>
              <span>04:27PM</span>
            </div>
          </div>
          <div class="signIn">
            <div class="date desktop">
              <span>Nov 22, 2023</span>
              <span>04:27PM</span>
            </div>
            <!-- <a href="/reporter/sign-in.php" class="signBtn">
              <span class="icon"><img src="reporter/assets/images/icons/user-icon.png" alt="icon"></span>
              <span>Sign In</span>
            </a> -->
            <div class="signBtn">
              <span class="icon"><img src="reporter/assets/images/icons/user-icon.png" alt="icon"></span>
              <!-- show first name only-->
              <span>Jhone</span>
              <!--  -->
              <div class="accountPop">
                <div class="image"><img src="reporter/assets/images/icons/user-icon.png" alt=""></div>
                <div class="name">Jhone Doe</div>
                <div class="ph">+91 1234 456 789</div>
                <button class="logout">Logout <img src="reporter/assets/images/icons/log-out.png" alt=""></button>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="menuSection">
      <div class="container">
        <div class="logoIcon" style="display: none;"><img src="reporter/assets/images/logo-icon.png" alt=""></div>
        <div class="content">
          <ul class="menus">
            <li class="menu"><a href="/reporter">Home</a></li>
            <li class="menu"><a href="/reporter/subcategory-listing.php">Top News</a></li>
            <li class="menu">
              <a href="/reporter/indepth-listing.php" class="text">In Depth</a>
              <div class="dropMenu">
                <div class="container">
                  <div class="content">
                    <ul class="subMenu">
                      <li><a href="/reporter">Deep Report</a></li>
                      <li><a href="/reporter">Art and Literature</a></li>
                      <li><a href="/reporter">Opinion</a></li>
                      <li><a href="/reporter">Judiciary</a></li>
                      <li><a href="/reporter">Gender</a></li>
                    </ul>
                    <div class="news">
                      <a href="/reporter" class="smallNewsBox">
                        <div class="image"><img src="reporter/assets/images/news-images/d3a06576c21ebd4c3dc3e601113d1078.png" alt="image"></div>
                        <div class="data">
                          <div class="head">Top News</div>
                          <div class="newsHeading">
                            <p>മാസപ്പടി വിവാദത്തിൽ ചോദ്യം ഉയർന്നപ്പോൾ മുഖ്യമന്ത്രി പൊട്ടിത്തെറിക്കുന്നു</p>
                          </div>
                        </div>
                      </a>
                      <a href="/reporter" class="smallNewsBox">
                        <div class="image"><img src="reporter/assets/images/news-images/d3a06576c21ebd4c3dc3e601113d1078.png" alt="image"></div>
                        <div class="data">
                          <div class="head">Top News</div>
                          <div class="newsHeading">
                            <p>മാസപ്പടി വിവാദത്തിൽ ചോദ്യം ഉയർന്നപ്പോൾ മുഖ്യമന്ത്രി പൊട്ടിത്തെറിക്കുന്നു</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="menu"><a href="/reporter/rspecial-sub-listing.php">R SPECIAL</a></li>
            <li class="menu"><a href="/reporter/subcategory-listing-sports-entertainmet.php">Sports</a></li>
            <li class="menu"><a href="/reporter">Entertainment</a></li>
            <li class="menu"><a href="/reporter">Lifestyle</a></li>
            <li class="menu"><a href="/reporter">District News</a></li>
            <li class="menu"><a href="/reporter">Gulf news</a></li>
          </ul>
          <div class="rightMenus">
            <div class="more menu">
              <span class="icon"><i class="fa-solid fa-ellipsis-vertical"></i></span>
              <span class="text">More</span>
              <div class="dropMenu">
                <div class="container">
                  <ul class="listMenu">
                    <li><a href="/reporter" class="mMenu">invideo</a></li>
                    <li><a href="/reporter" class="mMenu">invideo</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <a href="https://youtu.be/HGOiuQUwqEw" target="_blank" class="live">
              <span class="icon">
                <!-- <iframe src="https://lottie.host/embed/9c12eb89-fcce-4467-9fe1-fa5a7c73ff12/lPoy5VgP6r.json"></iframe> -->
                <img src="reporter/assets/images/icons/live.gif" alt="">
                </span>
              <span>LIVE TV</span>
            </a>
            <div class="search">
              <div class="searchIn">
                <span>Search</span>
                <span class="icon"><img src="reporter/assets/images/icons/search.png" alt="icon"></span>
              </div>
            </div>
          </div>

          <div class="searchArea">
            <div class="container">
              <div class="searchContent">
                <div class="searchIcon"><img src="haleys/assets/images/icons/search.png" alt="icon"></div>
                <input type="search" placeholder="Search for news, headlines, etc.">
                <div class="close"><img src="haleys/assets/images/icons/close.svg" alt="icon"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header> 