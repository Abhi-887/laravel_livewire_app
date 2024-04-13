

$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(500);
});



// slick slider

$(document).ready(function(){
  $('.my-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: true,
    dots: true,
    speed: 300,
    infinite: true,
    autoplaySpeed: 5000,
    autoplay: true,
    responsive: [
  {
    breakpoint: 991,
    settings: {
      slidesToShow: 3,
    }
  },
  {
    breakpoint: 767,
    settings: {
      slidesToShow: 1,
    }
  }
]
  });
});

  // Get the search icon and search input elements
  const searchIcon = document.getElementById("search-icon");
  const searchInput = document.getElementById("search-input");

  // Toggle the search input's visibility when the search icon is clicked
  searchIcon.addEventListener("click", function () {
      if (searchInput.style.display === "none" || searchInput.style.display === "") {
          searchInput.style.display = "block";
      } else {
          searchInput.style.display = "none";
      }
  });


