

$(document).ready(function () {
  $('.banner-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 4000,
    smartSpeed: 2000,
    items: 1,
    autoplayHoverPause: true,
    autoHeight: true,
  })
  $('.trending-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 2000,
    smartSpeed: 1000,
    items: 1,
    autoplayHoverPause: true,
    autoHeight: true,
  })
  $('.indepth-carousel').owlCarousel({
    loop: true,
    margin: 3,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 2000,
    smartSpeed: 1000,
    items: 1,
    autoplayHoverPause: true,
    autoHeight: true,
  })

  $('.sports-carousel').owlCarousel({
    loop: true,
    margin: 3,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 2000,
    smartSpeed: 1000,
    items: 2.1,
    autoplayHoverPause: true,
    autoHeight: true,
    responsive: {
      360: {
        items: 2.1,
      },
      768: {
        items: 2.1,
      },
      992: {
        items: 3.1,
      }
    }
  })
  $('.invideo-carousel').owlCarousel({
    loop: false,
    margin: 20,
    nav: true,
    navText:['<div>','<div>'],
    dots: false,
    autoplay: true,
    autoplayTimeout: 2000,
    smartSpeed: 1000,
    items: 4,
    autoplayHoverPause: true,
    autoHeight: true,
    responsive: {
      320: {
        items: 1,
      },
      380: {
        items: 2,
      },
      768: {
        items: 3,
      },
      992: {
        items: 4,
      }
    }
  })

  // poll----------
  const options = document.querySelectorAll("label");
  for (let i = 0; i < options.length; i++) {
    options[i].addEventListener("click", () => {
      for (let j = 0; j < options.length; j++) {
        if (options[j].classList.contains("selected")) {
          options[j].classList.remove("selected");
        }
      }

      options[i].classList.add("selected");
      for (let k = 0; k < options.length; k++) {
        options[k].classList.add("selectall");
      }

      let forVal = options[i].getAttribute("for");
      let selectInput = document.querySelector("#" + forVal);
      let getAtt = selectInput.getAttribute("type");
      if (getAtt == "checkbox") {
        selectInput.setAttribute("type", "radio");
      } else if (selectInput.checked == true) {
        options[i].classList.remove("selected");
        selectInput.setAttribute("type", "checkbox");
      }

      let array = [];
      for (let l = 0; l < options.length; l++) {
        if (options[l].classList.contains("selected")) {
          array.push(l);
        }
      }
      if (array.length == 0) {
        for (let m = 0; m < options.length; m++) {
          options[m].removeAttribute("class");
        }
      }
    });
  }
  // ///////////


  // Show the first tab and hide the rest
  $('#district-tabs li:first-child').addClass('active');
  $('#district-tabs-content .tab-content').hide();
  $('#district-tabs-content .tab-content:first').show();

  // Click function
  $('#district-tabs li').click(function () {
    $('#district-tabs li').removeClass('active');
    $(this).addClass('active');
    $('#district-tabs-content .tab-content').hide();

    var activeTab = $(this).find('a').attr('href');
    $(activeTab).fadeIn();
    return false;
  });


  // Show the first tab and hide the rest
  $('#gulf-tabs li:first-child').addClass('active');
  $('#gulf-tabs-content .tab-content').hide();
  $('#gulf-tabs-content .tab-content:first').show();

  // Click function
  $('#gulf-tabs li').click(function () {
    $('#gulf-tabs li').removeClass('active');
    $(this).addClass('active');
    $('#gulf-tabs-content .tab-content').hide();

    var activeTab = $(this).find('a').attr('href');
    $(activeTab).fadeIn();
    return false;
  });
});
