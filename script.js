// Function to animate the counting
function animateCounters(entry) {
    const countElement = entry.target;
    const target = +countElement.getAttribute('data-target'); // Get the target value
    const symbol = countElement.getAttribute("data-symbol"); // Get the symbol
    const increment = Math.ceil(target / 100); // Set the increment value
    let count = 0;
  
    // Function to update the count value
    function updateCount() {
      count = Math.min(count + increment, target);
      countElement.innerText = count + symbol;
  
      // Check if the count has reached the target
      if (count < target) {
        requestAnimationFrame(updateCount);
      }
    }
  
    // Start updating the count
    requestAnimationFrame(updateCount);
  }
  
  // Get all the count elements
  const countElements = document.querySelectorAll('.count');
  
  // Create the Intersection Observer
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounters(entry);
        observer.unobserve(entry.target);
      }
    });
  });
  
  // Observe each count element
  countElements.forEach(countElement => {
    observer.observe(countElement);
  });
  
   
  //======================================================== featured section slider==============================




  // By:
// Manuel Pinto
// https://manuelpinto.in
function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll", reveal);


   //** ------------------- Pre Loader Js-------*//
   $(document).ready(function(){
      $(window).on("load",function(){
          $(".preloader-wrapper").delay(100).fadeOut(500);
          $(document).ready(function() {
        $('html, body').css({
          overflow: 'hidden',
          height: '100%'
        });
        
        setTimeout(function() {
          $('html, body').css({
            overflow: 'auto',
            height: 'auto'
          });
        }, 100);
      });
      });
    });
    
  