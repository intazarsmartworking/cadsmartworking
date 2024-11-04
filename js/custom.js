// Home Page Accordian
var screeSize = false; 
var timeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;;

const today = new Date()
console.log('dataSet', timeZone, Intl, today)
const checkLocation = today.toString()
const windoSize = window.innerWidth               
// $(window).on('resize', function(){
//     var win = $(this); //this = window
//     if (win.height() >= 820) { /* ... */ }
    
// }); 

// const showDolor = checkLocation.includes('India') ? '$':'£';

// jQuery('#typeCurrency').text(showDolor)

if (windoSize < 680) { 
    screeSize = true
}else{
    screeSize = false
}

function toggleAccordion(sectionNumber) {
    const accordionSection = document.getElementById(`accordion-section-${sectionNumber}`);
    const accordionLabel = document.getElementById(`accordion-label-${sectionNumber}`);
    const arrowUp = document.getElementById(`arrow-up-${sectionNumber}`);
    const arrowDown = document.getElementById(`arrow-down-${sectionNumber}`);

    accordionSection.style.maxHeight = accordionSection.style.maxHeight ? null : "0";
    arrowUp.classList.toggle('hidden');
    arrowDown.classList.toggle('hidden');
    accordionLabel.classList.toggle('text-dark-orange');
  }


  /* For Mobile Menu */
document.addEventListener("DOMContentLoaded", function() {
  // const menuToggle = document.getElementById('menuToggle');
  // const mobileMenuModal = document.getElementById('mobileMenuModal');
  // const modalOverlay = document.querySelector('#mobileMenuModal .bg-black');

  // menuToggle.addEventListener("click", function() {
  //   mobileMenuModal.classList.toggle("hidden");
  // });

  // modalOverlay.addEventListener("click", function(e) {
  //   if (e.target === modalOverlay) {
  //     mobileMenuModal.classList.add("hidden");
  //   }
  // });




  //Card Logic
  
  // const cards = document.querySelectorAll('.card');
  // let leftPositions = ['50px', '90px', '120px','800px', '1450px', '2100px'];
  // if(screeSize){
  //   leftPositions = ['10px', '600px', '800px','1000px', '1200px', '1400px'];
  // }else{
  //   leftPositions = ['50px', '90px', '120px','800px', '1450px', '2100px'];
  // }
  // let originalLeftPostions = [...leftPositions];
  // let rotateCards = ['-9deg', '-7deg', '-4deg','-2deg', '0deg']

  // function updateCardPositions() {
  //     cards.forEach((card, index) => {
  //         card.style.left = leftPositions[index];
  //         if(card.style.left != originalLeftPostions[0] && 
  //           card.style.left != originalLeftPostions[1] && 
  //           card.style.left != originalLeftPostions[2] ) {

  //           card.style.rotate = rotateCards[rotateCards.length-1]  
  //           cards[0].style.rotate = rotateCards[rotateCards.length-1]
  //         }
  //         else {
  //           card.style.rotate = rotateCards[index]
            
  //         }

  //         if(index === 1 && cards[1].style.left === originalLeftPostions[3] 
  //           || cards[2].style.left === originalLeftPostions[4]) {
  //           cards[1].style.left = "700px"
  //           cards[2].style.left = "1350px"
  //         }
  //     });

  //     if(cards[4].style.left === originalLeftPostions[2]) {
  //       document.getElementById('prevButton').disabled = true;
  //     }
  //     else {
  //       document.getElementById('prevButton').disabled = false;
  //     }

  //     if(cards[1].style.left != originalLeftPostions[1]
  //        && cards[1].style.left != originalLeftPostions[2]
  //         && cards[1].style.left != originalLeftPostions[0]) {
  //       document.getElementById('nextButton').disabled = true;
  //     }
  //     else {
  //       document.getElementById('nextButton').disabled = false;
  //     }
  // }

  // document.getElementById('nextButton').addEventListener('click', () => {
  //   console.log("next", leftPositions)
  //     // Move the fourth card to the third card's position
  //     const fourthCard = leftPositions[3];
  //     leftPositions[3] = leftPositions[4];
  //     leftPositions[1] = leftPositions[2];
  //     leftPositions[4] = leftPositions[5];
  //     leftPositions[2] = fourthCard;
  //     leftPositions[5] = originalLeftPostions[5]

  //     if( cards[4].style.left === originalLeftPostions[2] || cards[4].style.left === originalLeftPostions[0]) {
  //       leftPositions[5] = originalLeftPostions[4]
  //       leftPositions[4] = originalLeftPostions[3]
  //       leftPositions[3] = originalLeftPostions[2]
  //       leftPositions[2] = originalLeftPostions[1]
  //     }
      

  //     updateCardPositions();
  // });

  // document.getElementById('prevButton').addEventListener('click', () => {
  //   console.log("prev", leftPositions)
  //   const initailCard = leftPositions[0];
  //   const firstCard = leftPositions[1];
  //   const secondCard = leftPositions[2];
  //   const thirdCard = leftPositions[3];
  //     leftPositions[1] = originalLeftPostions[0];
  //     leftPositions[2] = firstCard;
  //     leftPositions[3] = secondCard;
  //     leftPositions[4] = thirdCard;

  //   updateCardPositions();
  // });

  // updateCardPositions();



  //How It Works Card Logic

  //gsap.registerPlugin(ScrollTrigger);

//const spacer = -500;


//let howItWorksCards = gsap.utils.toArray(".how-it-works-card");

// Debug: Log the zIndex of the second card
// if (howItWorksCards[1]) {
//   console.log(howItWorksCards[1].style.zIndex);
// }

// gsap.fromTo(
//   ".how-it-works-card:not(:first-child)",
//   {
//     x: (index) =>  window.innerWidth + spacer, // Initial position off-screen
//     rotate: 0,
//   },
//   {
//     x: (index) => (index + 1),  // Final position on-screen
//     stagger: 0.5,
//     rotate: 0,
//     scrollTrigger: {
//       trigger: '.how-it-works-section',  // Trigger element
//       pin: ".how-it-works-section",     // Pin the entire section
//       pinSpacing: false,                // Disable automatic pinSpacing adjustment
//       scrub: true,                      // Smooth scrubbing effect
//       start: "top 50px",        // Start animation when top of section is 100px from top of viewport
//       end: "+=1000",                    // End animation 1000px after start
//       invalidateOnRefresh: true         // Invalidate trigger on refresh
//     }
//   }
// );

}); 

// Dropdown Menu

document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".dropdown");

  dropdowns.forEach(dropdown => {
    const toggle = dropdown.querySelector(".dropdown-toggle");
    const menu = dropdown.querySelector(".dropdown-menu");

    toggle.addEventListener("click", function (e) {
      e.stopPropagation();
      menu.classList.toggle("show");
    });

    document.addEventListener("click", function () {
      menu.classList.remove("show");
    });

    menu.addEventListener("click", function (e) {
      e.stopPropagation();
    });
  });
});






// Search Skill when someone click on search box on Homepage
function filterSkills() {
  const input = document.getElementById('searchInput');
  const filter = input.value.toLowerCase();
  const skillsContainer = document.getElementById('skillsContainer');
  const skillDivs = skillsContainer.getElementsByClassName('flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border');
  const displayedSkills = new Set();

  for (let i = 0; i < skillDivs.length; i++) {
    const skillText = skillDivs[i].getElementsByTagName('h4')[0];
    const txtValue = skillText.textContent || skillText.innerText;
    if (txtValue.toLowerCase().indexOf(filter) > -1 && !displayedSkills.has(txtValue.toLowerCase())) {
      skillDivs[i].style.display = "";
      displayedSkills.add(txtValue.toLowerCase());
    } else {
      skillDivs[i].style.display = "none";
    }
  }
}

// Select/Unselect Skill
function toggleSkill(skillElement) {
  const isSelected = skillElement.classList.toggle('skill-selected');
  const crossIcon = skillElement.querySelector('svg');
  const skillName = skillElement.querySelector('h6').textContent.trim();

  if (isSelected) {
    addToInput(skillName);
  } else {
    removeFromInput(skillName);
  }

  if (crossIcon) {
    crossIcon.classList.toggle('hidden', !isSelected);
  }
}

// Add skill to input box
function addToInput(skillName) {
  const inputBox = document.getElementById('skillsInput');
  const currentValue = inputBox.value.trim();
  const newValue = currentValue.length === 0 ? skillName : currentValue + ', ' + skillName;
  inputBox.value = newValue;
}

// Remove skill from input box
function removeFromInput(skillName) {
  const inputBox = document.getElementById('skillsInput');
  let currentValue = inputBox.value.trim();
  currentValue = currentValue.replace(new RegExp(skillName + ',?'), ''); // Remove the skill from input
  inputBox.value = currentValue.trim();
}

function deselectSkill(event) {
  event.stopPropagation(); // Prevents triggering the skill toggle again
  const skillElement = event.currentTarget.parentNode;
  skillElement.classList.remove('skill-selected');
  const skillName = skillElement.querySelector('h6').textContent.trim();
  removeFromInput(skillName);
  event.currentTarget.classList.add('hidden');
}

// Counter function
function animateCounter(element, start, end, duration, suffix = '') {
  let startTime = null;

  const step = (timestamp) => {
      if (!startTime) startTime = timestamp;
      const progress = Math.min((timestamp - startTime) / duration, 1);
      const value = Math.floor(progress * (end - start) + start);
      element.textContent = value.toLocaleString() + suffix;
      if (progress < 1) {
          window.requestAnimationFrame(step);
      }
  };

  window.requestAnimationFrame(step);
}

// Intersection Observer to trigger the animation
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
      if (entry.isIntersecting) {
          const element = entry.target;
          const targetValue = parseInt(element.getAttribute('data-target'));
          const textContent = element.textContent.trim();

          let suffix = '';
          if (textContent.includes('+')) {
              suffix = '+';
          } else if (textContent.includes('%')) {
              suffix = '%';
          } else if (textContent.includes('£')) {
              suffix = '£' + targetValue;
          }

          animateCounter(element, 0, targetValue, 2000, suffix);
          observer.unobserve(element); // Unobserve the element after animation starts
      }
  });
}, {
  threshold: 0.5 // Adjust this threshold as needed
});

// Observe each counter element
document.querySelectorAll('[data-target]').forEach(element => {
  observer.observe(element);
});

var interval;
var counter = 0;
var newChangeValue = 1600;
function sliderFunction(){
 var interval = setInterval(function(){
      if(counter <= 100 && newChangeValue <= 4200){
        counter += 1;
        const width = `${counter}%`
        jQuery('#progress').css("width", width);
        jQuery('#range').val(counter);
        newChangeValue += 26;
        let changeValue = `£ ${newChangeValue}`
        jQuery('#price-value').text(changeValue);
        
        
      }else{
        counter = 0;
        newChangeValue = 1600;
        jQuery('#progress').css("width", 0);
        jQuery('#range').val(0);
        let changeValue = `£ 0`
        const newValue = `£ 1600`;
        jQuery('#price-value').text(newValue);
        clearInterval(interval);
        sliderFunction()
      }
  }, 100);
}
sliderFunction()

var interval2;
var counter2 = 0;
var newChangeValue2 = 1600;
function sliderFunction2(){
 var interval2 = setInterval(function(){
      if(counter2 <= 100 && newChangeValue2 <= 4200){
        counter2 += 1;
        const width = `${counter2}%`
        jQuery('.progress-bar').css("width", width);
        jQuery('.header-range').val(counter2);
        newChangeValue2 += 26;
        let changeValue = `£ ${newChangeValue2}`
        jQuery('.price-value').text(changeValue);
        
        
      }else{
        counter2 = 0;
        newChangeValue2 = 1600;
        jQuery('progress-bar').css("width", 0);
        jQuery('.header-range').val(0);
        let changeValue = `£ 0`
        const newValue = `£ 1600`
        jQuery('.price-value').text(newValue);
        clearInterval(interval2);
        sliderFunction2()
      }
  }, 100);
}
sliderFunction2()

var controller = new ScrollMagic.Controller();

function homePageAnimation(){

// define movement of panels

var wipeAnimation;

if(!screeSize){
    console.log('screeSize', screeSize)
    wipeAnimation = new TimelineMax()
                    .fromTo("section.panel.white", 1, {x: "5%"}, {x: "5%", ease: Linear.easeNone})  // in from left
                    .fromTo("section.panel.blue", 1, {x: "85%"}, {x: "10%", ease: Linear.easeNone})  // in from left
                    .fromTo("section.panel.turqoise", 1, {x: "90%"}, {x: "15%", ease: Linear.easeNone})  // in from left
                    .fromTo("section.panel.green", 1, {x:  "95%"}, {x: "20%", ease: Linear.easeNone})  // in from right
}else{
    wipeAnimation = new TimelineMax()
                    .fromTo("section.panel.white", 1, {y: "5%"}, {y: "0%", ease: Linear.easeNone})  // in from left
                    .fromTo("section.panel.blue", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone})  // in from left
                    .fromTo("section.panel.turqoise", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone})  // in from left
                    .fromTo("section.panel.green", 1, {y:  "100%"}, {y: "0%", ease: Linear.easeNone})  // in from right
}

// create scene to pin and link animation
new ScrollMagic.Scene({
        triggerElement: "#pinContainer",
        triggerHook: "onLeave",
        duration: "300%",
        offset:-50

    })
    .setPin("#pinContainer")
    .setTween(wipeAnimation)
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller);

              
    
             
}



function aboutUsAnimation(){

  

  const effect1 = new TimelineMax()
    .fromTo("#scroll-effect-1 h1", 0.4, { y: '40px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-1 p", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")

  const effect2 = new TimelineMax()
    .fromTo("#scroll-effect-2 h1", 0.4, { y: '40px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-2 p", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start") 
  
  const effect3 = new TimelineMax()
    .fromTo("#scroll-effect-3 h1", 0.4, { y: '40px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-3 p", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")

  const effect4 = new TimelineMax()
    //.fromTo("#scroll-effect-4 .timeline-content-box", 0.4, { y: '40px', opacity: 0 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-4 p", 0.4, { x: '-200px', opacity: 0 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-4 img", 0.4, { x: '300px', opacity: 0}, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    
    
  const effect5 = new TimelineMax()
    .fromTo("#scroll-effect-5 h1", 0.4, { y: '40px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-5 p", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")

  const effect6 = new TimelineMax()
    .fromTo("#scroll-effect-6 .btn", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-6 h1", 0.4, { y: '40px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-6 p", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")

  const effect7 = new TimelineMax()
    .fromTo("#scroll-effect-7 .btn", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-7 h1", 0.4, { y: '40px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-7 p", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")


  const effect8 = new TimelineMax()
    .fromTo("#scroll-effect-8 .value-item", 0.4, { y: '0px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-8 .btn", 0.4, { y: '30px',opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-8 .box-1", 0.4, { x: '300px', opacity: 0.3 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-8 .box-2", 0.4, { y: '80px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-8 .box-3", 0.4, { x: '-300px', opacity: 0.3 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-8 h1", 0.4, { y: '40px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-8 p", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")


  const effect9 = new TimelineMax()
    .fromTo("#scroll-effect-9 p", 0.4, { x: '-200px', opacity: 0 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-9 .ani-img", 0.4, { x: '300px', opacity: 0 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")

  const effect10 = new TimelineMax()
    .fromTo("#scroll-effect-10 h1", 0.4, { x: '-300px', opacity: 0 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-10 p", 0.4, { x: '-300px', opacity: 0 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-10 .discount", 0.4, { x: '300px', opacity: 0 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")


  const effect11 = new TimelineMax()
    .fromTo("#scroll-effect-11 .box-1", 0.4, { x: '300px', opacity: 0 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-11 .box-2", 0.4, { x: '-300px', opacity: 0 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-11 h1", 0.4, { y: '40px', opacity: 0 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-11 p", 0.4, { y: '60px', opacity: 0 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")


  const effect12 = new TimelineMax()
    .fromTo("#scroll-effect-12 .img-1", 0.4, { x: '300px', opacity: 0.3 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-12 .img-2", 0.4, { x: '-300px', opacity: 0.3 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-12 .img-3", 0.4, { y: '300px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-12 h1", 0.4, { y: '40px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-12 p", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")

  const effect13 = new TimelineMax()
    .fromTo("#scroll-effect-13 .btn", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-13 h1", 0.4, { y: '40px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-13 p", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")




    
   
    var change1 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-1" })
              .offset( 0 )
              //.setClassToggle( ".article-2 .card", "is-visible" )
              .setTween(effect1)
              //.addIndicators({ name: 'effect 1' })
              .addTo( controller );

    var change2 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-2" })
              .offset( -300 )
              //.setClassToggle( ".article-2 .card", "is-visible" )
              .setTween(effect2)
              //.addIndicators({ name: 'effect 2' })
              .addTo( controller );
      
    var change3 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-3" })
              .offset( 0 )
              .setTween(effect3)
              //.setClassToggle( ".article-3 .card", "is-visible" )
              //.addIndicators({ name: 'effect 3' })
              .addTo( controller );

    var change4 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-4" })
              .offset( 100 )
              .setTween(effect4)
              //.addIndicators({ name: 'effect 4' })
              .addTo( controller );

    var change5 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-5" })
              .offset( 0 )
              .setTween(effect5)
              //.addIndicators({ name: 'effect 5' })
              .addTo( controller );

    var change6 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-6" })
              .offset( 0 )
              .setTween(effect6)
              //.addIndicators({ name: 'effect 6' })
              .addTo( controller );

    var change7 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-7" })
              .offset( 0 )
              .setTween(effect7)
              //.addIndicators({ name: 'effect 7' })
              .addTo( controller );

    var change8 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-8" })
              .offset( 200 )
              .setTween(effect8)
              //.addIndicators({ name: 'effect 8' })
              .addTo( controller );

    var change9 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-9" })
              .offset( 200 )
              .setTween(effect9)
              //.addIndicators({ name: 'effect 9' })
              .addTo( controller );

    var change10 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-10" })
              .offset( 100 )
              .setTween(effect10)
              //.addIndicators({ name: 'effect 10' })
              .addTo( controller );

    var change11 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-11" })
              .offset( 200 )
              .setTween(effect11)
              //.addIndicators({ name: 'effect 11' })
              .addTo( controller );


    var change12 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-12" })
              .offset( 200 )
              .setTween(effect12)
              //.addIndicators({ name: 'effect 12' })
              .addTo( controller );

    var change13 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-13" })
              .offset( 200 )
              .setTween(effect13)
              //.addIndicators({ name: 'effect 13' })
              .addTo( controller );


}




function fadeSquares(el1, el2){
  //console.log('working')
  el1.fadeOut(2000, ()=>{
    el1.fadeIn(2000);
  });
}
let el1 = jQuery('.path1');
let el2 = jQuery('#movebox');

setInterval(function (){
  //console.log('timent')
  fadeSquares(el1, el2);
}, 6000)








jQuery('.silkSlide').slick({
  infinite: true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  centerMode: false,
  focusOnSelect: true,
  autoplay: true,
  arrows: false,
  dots:false,
  responsive: [
        {
          breakpoint: 1024,
          settings: {
              infinite: true,
              speed: 300,
              slidesToShow: 5,
              slidesToScroll: 1,
              centerMode: false,
              variableWidth: true,
              focusOnSelect: true
          }
        }
      ]
});


jQuery('.relatedBlogs').slick({
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  centerMode: false,
  focusOnSelect: true,
  autoplay: true,
  arrows: false,
  dots:false,
  responsive: [
        {
          breakpoint: 1024,
          settings: {
              infinite: true,
              speed: 300,
              slidesToShow: 3,
              slidesToScroll: 1,
              centerMode: false,
              variableWidth: true,
              focusOnSelect: true
          }
        }
      ]
});


$('.logoSlider').slick({
  dots: true,
  infinite: false,
  speed: 100,
  slidesToShow: 8,
  slidesToScroll: 4,
  centerMode: false,
  focusOnSelect: true,
  autoplay: true,
  arrows: false,
  dots:false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 8,
        slidesToScroll: 4,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});




jQuery('#prev-blog').click(function(e) {
  jQuery('.relatedBlogs').slick('slickNext');
});

jQuery('#next-blog').click(function(e) {
  jQuery('.relatedBlogs').slick('slickPrev');
});




var items = jQuery(".timeline .timeline-item"),
timelineHeight = jQuery(".timeline .timeline-box").height(),
greyLine = jQuery('.default-line'),
lineToDraw = jQuery('.draw-line');

// sets the height that the greyLine (.default-line) should be according to `.timeline ul` height

// run this function only if draw line exists on the page
if(lineToDraw.length) {
  jQuery(window).on('scroll', function () {

    // Need to constantly get '.draw-line' height to compare against '.default-line'
    var redLineHeight = lineToDraw.height(),
    greyLineHeight = greyLine.height(),
    windowDistance = jQuery(window).scrollTop(),
    windowHeight = jQuery(window).height() / 2,
    timelineDistance = jQuery(".timeline").offset().top;

    if(windowDistance >= timelineDistance - windowHeight) {
      line = windowDistance - timelineDistance + windowHeight;

      if(line <= greyLineHeight) {
        lineToDraw.css({
          'height' : line + 20 + 'px'
        });
      }
    }

    // This takes care of adding the class in-view to the li:before items
    var bottom = lineToDraw.offset().top + lineToDraw.outerHeight(true);
    items.each(function(index){
      var circlePosition = jQuery(this).offset();

      if(bottom > circlePosition.top) {				
        jQuery(this).addClass('in-view');
      } else {
        jQuery(this).removeClass('in-view');
      }
    });	
  });
}

var elementPosition = null;
var boxScrollHeight = 0;

function menuOnScroll(mySection, myMenu, myClass) {
  jQuery(window).scroll(function(){
    var elScroll = jQuery(window).scrollTop() + 150;
    if((jQuery(window).scrollTop() > (elementPosition != null && elementPosition.top)) && (boxScrollHeight > jQuery(window).scrollTop())){
      console.log(jQuery(window).scrollTop())
      jQuery('.stickysidenav').addClass('side-bar-fix');
    } 
    // else {
    //   jQuery('.stickysidenav').removeClass('side-bar-fix');
    // }  
    jQuery(mySection).each(function(i){
      if (jQuery(this).offset().top <= elScroll) {
        jQuery(myMenu).removeClass(myClass);
        jQuery(myMenu).eq(i).addClass(myClass);
      }
    });
  });
}
menuOnScroll('.scroll-section',"a[data-location]", 'active');

function scrollToAnyPoint (navItem) {
  var getAttr;
  jQuery(navItem).click(function(e){
    e.preventDefault();
    // getAttr = jQuery(this).attr('data-location');
    getAttr = jQuery(this).attr('data-location');
    console.log('getAttr', getAttr)
    const getID = '#'+getAttr;
    var toSection = jQuery(getID).offset().top - 150;
    jQuery("html, body").animate({scrollTop:toSection}, 1000)
  });
}

scrollToAnyPoint("a[data-location]");

jQuery('#show-more').on('click', function(){
  console.log('log', jQuery(this).text())
  jQuery('#change-icons').toggleClass('change-icons')

  if(jQuery(this).text() == 'Show more'){
    jQuery(this).text('Hide')
  }else{
    jQuery(this).text('Show more')
  }
  callFunction()
})



function callFunction(){
  elementPosition = null;
  jQuery('.stickysidenav').hide()
  jQuery('#sticky-details').toggleClass('show-details')
 
  setTimeout( function(){
   elementPosition = jQuery('.show-more-box').offset();
   jQuery('.stickysidenav').fadeIn('slow')
  }, 100)
  setTimeout( function(){
    jQuery('.stickysidenav').fadeIn('slow')
    let sideMenuH = jQuery('.stickysidenav').height();
    let moreBoxH =  jQuery('.show-more-box').height();
    boxScrollHeight = ( moreBoxH + elementPosition.top) - sideMenuH;
    console.log(boxScrollHeight, elementPosition, sideMenuH)
   }, 300)
}




jQuery(".accordion-item .accordion-title").click(function(){
  jQuery(this).next().slideToggle().siblings(".accordion-details:visible").slideUp();
});



jQuery(document).ready(function(){
  var listPosition = []
  var x = document.querySelectorAll(".slider-item");
  for (let i = 0; i < x.length; i++) {
    const leftPos = 630*i;
    listPosition.push(leftPos)
  }

  listPosition.forEach((ele, index) =>{
    x[index].style.left = `${ele}px`
  })

  const maxMove = (x.length-2)*630;
  let maxMoveItem = 0

  indexChange = 1;

  jQuery('#prevButton').on('click', function(){
     if(maxMoveItem >= 0){
      const changePosi = listPosition.map((ele) => (ele - 630));
      changePosi.forEach((ele, index) =>{
        if(ele >= 0 && changePosi[0] <= 0){
          //x[index].style.left = `${ele}px`;
          jQuery(x[index]).animate({left:`${ele}px`})
          if(ele <= 0){
            // x[index].style.rotate = `${index*2}deg`;
            jQuery(x[index]).animate({rotate:`-${index*2}deg`})
            jQuery(x[index]).addClass('active')
          }
        }
      })
      console.log(changePosi)
      listPosition = changePosi;
      maxMoveItem = listPosition[changePosi.length -2];
     }
     indexChange = indexChange + 1;

     if(indexChange > 0  && x.length > indexChange){
      jQuery('#prevButton').prop('disabled', false);
      jQuery('#nextButton').prop('disabled', false);
     }else{
      jQuery('#prevButton').prop('disabled', true);
      jQuery('#nextButton').prop('disabled', false);
     }

    
  })

  jQuery('#nextButton').on('click', function(){
    if(maxMove >= maxMoveItem){
      const changePosi = listPosition.map((ele) => (ele + 630));
      changePosi.forEach((ele, index) =>{
        if(ele >= 0  && changePosi[0] <= 0){
          // x[index].style.left = `${ele}px`
          jQuery(x[index]).animate({left:`${ele}px`})
          if(ele > 0){
            //x[index].style.rotate = `${0}deg`
            jQuery(x[index]).animate({rotate:`${0}deg`})
            jQuery(x[index]).removeClass('active')
          }
        }
      })
      console.log(changePosi)
      listPosition = changePosi;
      maxMoveItem = listPosition[changePosi.length -1];
    }
    indexChange = indexChange - 1;
    if(indexChange > 1 && x.length > indexChange){
      jQuery('#prevButton').prop('disabled', false);
      jQuery('#nextButton').prop('disabled', false);
     }else{
      jQuery('#prevButton').prop('disabled', false);
      jQuery('#nextButton').prop('disabled', true);
     }

  })
  
  setTimeout(() =>{
    jQuery('.userMore').slick({
      infinite: true,
      speed: 100,
      slidesToShow: 4,
      slidesToScroll: 1,
      centerMode: false,
      focusOnSelect: true,
      autoplay: true,
      arrows: true,
      dots:false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }, 200)


});



function loadAnimation(){
  
  const elementRayItem = document.querySelectorAll(".path-box");
  jQuery(elementRayItem[elementRayItem.length - 1]).addClass('last-arrow');

  var action = new TimelineMax().to('#circle',5,{
      bezier:{
        curviness: 1.25,
        type: "cubic",
        values:[
          {x:100, y:100}, 
          {x:200, y:200}, 
          {x:300, y:300},
          {x:400, y:400},
          {x:500, y:500}
        ]},
      ease: Power0.easeNone})

 const scrollBar = new ScrollMagic.Scene({
    triggerElement: "#wrapper",
    duration: "100%",   
    offset:300
  })
  .setTween(action)
  .setPin("#wrapper")
  .addTo(controller)
  .on('update', (e) =>{
    // console.log(e, action)
    // const top = `translate3d(0px, ${e.scrollPos}px, 0px)`
    // jQuery('#circle').css({transform: top})
    
  })
  //.addIndicators();

  console.log('bezier', controller, scrollBar)

}


var skillPriceData = null;
var skillExpData = null;
var skillPeopleData = 1;


function skillPrice(price){
  //console.log(item)
  //const price = JSON.parse(item);
  // jQuery('.item-skill').removeClass('active');
  // const activeItem = `#select-item-${price.id}`
  // jQuery(activeItem).addClass('active')
  // console.log(typeof price)
  // const dataPrice = JSON.stringify(price)
  skillPriceData = price;
  console.log(price, skillPriceData)
  if(skillPriceData != null && skillExpData != null && skillPeopleData != null){
    //const cost = Number(skillPriceData[skillExpData.level]) * Number(skillPeopleData)
    const cost = Number(skillPriceData[skillExpData.level])
    jQuery('#total-price').text(cost)

    if(skillPriceData[skillExpData.level] == 12){
      const discount = 750*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }else if(skillPriceData[skillExpData.level] == 14){
      const discount = 1500*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }else if(skillPriceData[skillExpData.level] == 15){
      const discount = 1875*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }else if(skillPriceData[skillExpData.level] == 17){
      const discount = 2625*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }else if(skillPriceData[skillExpData.level] == 18){
      const discount = 3000*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }else if(skillPriceData[skillExpData.level] == 20){
      const discount = 3750*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }else if(skillPriceData[skillExpData.level] == 22){
      const discount = 4500*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }

    
    

  }
}
function skillExperience(count){
  jQuery('.exp-item').removeClass('active');
  const activeItem = `#exp-item-${count.id}`
  jQuery(activeItem).addClass('active')

  skillExpData = count;
  if(skillPriceData != null && skillExpData != null && skillPeopleData != null){
    // const cost = Number(skillPriceData[skillExpData.level]) * Number(skillPeopleData);
    const cost = Number(skillPriceData[skillExpData.level])
    jQuery('#total-price').text(cost)

    if(skillPriceData[skillExpData.level] == 12){
      const discount = 750*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }else if(skillPriceData[skillExpData.level] == 14){
      const discount = 1500*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }else if(skillPriceData[skillExpData.level] == 15){
      const discount = 1875*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }else if(skillPriceData[skillExpData.level] == 17){
      const discount = 2625*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }else if(skillPriceData[skillExpData.level] == 18){
      const discount = 3000*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }else if(skillPriceData[skillExpData.level] == 20){
      const discount = 3750*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }else if(skillPriceData[skillExpData.level] == 22){
      const discount = 4500*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }

    

  }
  console.log(count)
}

function skilleldPeople(count){
  //console.log(count.target.value)
  skillPeopleData = count;
  if(skillPriceData != null && skillExpData != null && skillPeopleData != null){
    // const cost = Number(skillPriceData[skillExpData.level]) * Number(skillPeopleData)
    const cost = Number(skillPriceData[skillExpData.level])
    jQuery('#total-price').text(cost)

    if(skillPriceData[skillExpData.level] == 12){
      const discount = 750*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }else if(skillPriceData[skillExpData.level] == 14){
      const discount = 1500*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }else if(skillPriceData[skillExpData.level] == 15){
      const discount = 1875*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }else if(skillPriceData[skillExpData.level] == 17){
      const discount = 2625*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }else if(skillPriceData[skillExpData.level] == 18){
      const discount = 3000*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }else if(skillPriceData[skillExpData.level] == 20){
      const discount = 3750*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }else if(skillPriceData[skillExpData.level] == 22){
      const discount = 4500*skillPeopleData;
      jQuery('#discount-price').text(discount)
    }

    
  }
}

// const div = document.querySelector(`#resize`);
// const box = document.querySelector(`#resizable`);
// box.addEventListener(`mousedown`, (e) => {
//   const {
//     offsetX,
//     offsetY,
//   } = e;
//   div.style.width = offsetX + `px`;
// });

function loadPricePage(){
  const
  range = document.getElementById('slide-range'),
  rangeV = document.getElementById('rangeV'),
  setValue = ()=>{
    const
      newValue = Number( (range.value - range.min) * 100 / (range.max - range.min) ),
      newPosition = 10 - (newValue * 0.2);
    rangeV.innerHTML = `<span>${range.value}</span>`;
    rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
    skilleldPeople(range.value)
  };
document.addEventListener("DOMContentLoaded", setValue);
range.addEventListener('input', setValue);
}


jQuery(".header-menu li a.more_menu").on('click', function(e){
  e.preventDefault();
  jQuery('.header-menu li a').removeClass('active');
  jQuery(this).addClass('active')
  
  jQuery('.mega-menu-box').addClass('open')
  jQuery('.show-main-menu').removeClass('active-menu')
  const getAttr = jQuery(this).attr('data-mainmenu');
 
  const getId = `#${getAttr}`;
  jQuery(getId).addClass('active-menu');
  jQuery('.mega-menu-left li').removeClass('active');
  if(getAttr == 'hireDevId'){
    jQuery('#hireDevId .mega-menu-left li').first().addClass('active');
  }else if(getAttr == 'insightsId'){
    jQuery('#insightsId .mega-menu-left li').first().addClass('active');
  }
})
jQuery(".mega-menu-left li").on('click', function(){
  jQuery('.mega-menu-left li').removeClass('active');
  jQuery(this).addClass('active');
  jQuery('.show-more-menu').removeClass('show-more')
  const getAttr = jQuery(this).attr('data-menu');
  console.log('getAttr', getAttr)
  const getId = `#${getAttr}`;
  jQuery(getId).addClass('show-more')
})

jQuery('body').on('click',function(event){
  if(jQuery(event.target).is('.header-menu li a')){
    //jQuery('.header-menu li a').removeClass('active');
    return
  }
  if(jQuery(event.target).closest('.mega-menu-box').length === 0){
    jQuery(".mega-menu-box").removeClass("open");
    jQuery('.header-menu li a').removeClass('active');
  }
});


jQuery(window).scroll(function(){
  var sticky = jQuery('.main-header'),
      scroll = jQuery(window).scrollTop();
      jQuery('.header-menu li a').removeClass('active');
      jQuery(".mega-menu-box").removeClass("open");
      jQuery('#mobile-show-menu').removeClass("isMenuShow");
    if (scroll >= 5){
      sticky.addClass('fixed')
    }else{
      sticky.removeClass('fixed')
    };
});

jQuery("#mobile-menu-show").on('click', function(){
  jQuery('#mobile-show-menu').toggleClass('isMenuShow')
})


$("#myInput").on("keyup", function() {
  var value = this.value.toLowerCase().trim();
  $("#searchItem .item-skill").show().filter(function() {
    return $(this).text().toLowerCase().trim().indexOf(value) == -1;
  }).hide();
});


if(checkLocation.includes('India')){
  console.log('India')
  const contryName = `
          <h6 class="text-footer-menu-color text-base font-medium leading-normal"> India </h6>
          <p class="text-footer-menu-color text-sm leading-normal"> C Block Community Centre, Plot No. 6, Upper Ground Floor, Delhi, 110058 </p>
          <h6 class="text-footer-menu-color text-base font-medium leading-normal mt-5"> United Kingdom </h6>
          <p class="text-footer-menu-color text-sm leading-normal"> The Plaza, 535 King’s Rd, London SW10 0SZ </p>
          `;
  jQuery('#findAdress').append(contryName)
}else{
  const contryName = `<h6 class="text-footer-menu-color text-base font-medium leading-normal"> United Kingdom </h6>
          <p class="text-footer-menu-color text-sm leading-normal"> The Plaza, 535 King’s Rd, London SW10 0SZ </p>`;
  jQuery('#findAdress').append(contryName)
}




function priceRateGet(){
  var priceDataPound = [
    {id:1, midLevel:12,senior:15, name:'WordPress'},
    {id:2,midLevel:15,senior:18, name:'PHP'},
    {id:3,midLevel:15,senior:18, name:'QA'},
    {id:4,midLevel:14,senior:17, name:'Data Analyst'},
    {id:5,midLevel:14,senior:17, name:'Data Engineer'},
    {id:6,midLevel:17,senior:20, name:'MongoDB'},
    {id:7,midLevel:17,senior:20, name:'Laravel'},
    {id:8,midLevel:17,senior:20, name:'Kubernetes'},
    {id:9,midLevel:17,senior:20, name:'iOS'},
    {id:10,midLevel:17,senior:20, name:'Docker'},
    {id:11,midLevel:17,senior:20, name:'Django'},
    {id:12,midLevel:17,senior:20, name:'DevOps'},
    {id:13,midLevel:17,senior:20, name:'Azure'},
    {id:14,midLevel:17,senior:20, name:'AWS'},
    {id:15,midLevel:17,senior:20, name:'Angular'},
    {id:16,midLevel:17,senior:20, name:'Python'},
    {id:17,midLevel:17,senior:20, name:'Node.js'},
    {id:18,midLevel:17,senior:20, name:'Woo Commerce'},
    {id:19,midLevel:17,senior:20, name:'Unity'},
    {id:20,midLevel:17,senior:20, name:'AI'},
    {id:21,midLevel:17,senior:20, name:'.Net'},
    {id:22,midLevel:17,senior:20, name:'Ruby on Rails'},
    {id:23,midLevel:17,senior:20, name:'JavaScript'},
    {id:24,midLevel:17,senior:20, name:'Salesforce'},
    {id:25,midLevel:17,senior:20, name:'Java'},
    {id:26,midLevel:17,senior:20, name:'Game'},
    {id:27,midLevel:17,senior:20, name:'Blockchain'},
    {id:28,midLevel:17,senior:20, name:'React'},
    {id:29,midLevel:17,senior:20, name:'React Native'},
    {id:30,midLevel:17,senior:20, name:'Magento'},
    {id:31,midLevel:17,senior:20, name:'Shopify Developer'},
    {id:32,midLevel:17,senior:20, name:'Flutter'},
    {id:33,midLevel:17,senior:20, name:'Kubernetes'},
    {id:34,midLevel:17,senior:20, name:'AWS'},
    {id:35,midLevel:17,senior:20, name:'Azure'},
    {id:36,midLevel:17,senior:20, name:'DevOps'},
    {id:37,midLevel:17,senior:20, name:'Django'},
    {id:38,midLevel:17,senior:20, name:'Docker'},
    {id:39,midLevel:17,senior:20, name:'iOS'},
    {id:40,midLevel:17,senior:20, name:'Android'},
  ]

  var priceDataDoller = [
    {id:1, midLevel:16, senior:20, name:'WordPress'},
    {id:2, midLevel:20, senior:24, name:'PHP'},
    {id:3, midLevel:20, senior:24, name:'QA'},
    {id:4, midLevel:18, senior:23, name:'Data Analyst'},
    {id:5, midLevel:18, senior:23, name:'Data Engineer'},
    {id:6, midLevel:23, senior:26, name:'MongoDB'},
    {id:7, midLevel:23, senior:26, name:'Laravel'},
    {id:8, midLevel:23, senior:26, name:'Kubernetes'},
    {id:9, midLevel:23, senior:26, name:'iOS'},
    {id:10, midLevel:23, senior:26, name:'Docker'},
    {id:11, midLevel:23, senior:26, name:'Django'},
    {id:12, midLevel:23, senior:26, name:'DevOps'},
    {id:13, midLevel:23, senior:26, name:'Azure'},
    {id:14, midLevel:23, senior:26, name:'AWS'},
    {id:15, midLevel:23, senior:26, name:'Angular'}
  ]

  var priceDataEuro = [
    {id:1,midLevel:14,senior:18, name:'WordPress'},
    {id:2,midLevel:18,senior:21, name:'PHP'},
    {id:3,midLevel:18,senior:21, name:'QA'},
    {id:4,midLevel:17,senior:20, name:'Data Analyst'},
    {id:5,midLevel:17,senior:20, name:'Data Engineer'},
    {id:6,midLevel:20,senior:24, name:'MongoDB'},
    {id:7,midLevel:20,senior:24, name:'Laravel'},
    {id:8,midLevel:20,senior:24, name:'Kubernetes'},
    {id:9,midLevel:20,senior:24, name:'iOS'},
    {id:10,midLevel:20,senior:24, name:'Docker'},
    {id:11,midLevel:20,senior:24, name:'Django'},
    {id:12,midLevel:20,senior:24, name:'DevOps'},
    {id:13,midLevel:20,senior:24, name:'Azure'},
    {id:14,midLevel:20,senior:24, name:'AWS'},
    {id:15,midLevel:20,senior:24, name:'Angular'}
  ]

  var priceLocationList = []

  if(timeZone.includes('Europe')){
    priceLocationList = priceDataEuro;
  }else{
    priceLocationList = priceDataPound;
    console.log('priceDataDoller', priceDataDoller)
  }



  var priceData = jQuery('#searchItem');
  const sortPriceLocationList = priceLocationList.sort((a,b)=> {
    var a1 = a.name.toLowerCase();
    var b1 = b.name.toLowerCase();
    return a1<b1 ?-1:a1> b1? 1 :0;
    })
    // sortPriceLocationList.forEach(function(item) {
    //     var itemData = jQuery('<div class="item-skill text-[#040524] text-[12px] text-center content-center p-3 h-[80px] rounded-[8px] border border-[rgba(5,4,3,0.20)] "><span class="block pro-name">'+item.name+'</span><span class="active-img absolute bg-[#DF4402] text-white rounded-full font-extrabold h-[20px] w-[20px] right-[-7px] top-[-5px]">&#10003</span></div>').data('price', item)
    //       priceData.append(itemData);
    //   });


      priceData.on('click', '.item-skill', function() {
          jQuery('.item-skill').removeClass('active')
          jQuery(this).addClass('active')
          var priceValue = jQuery(this).data('price');
          var priceValueDolor = jQuery(this).data('dolor');
          console.log('priceValue', priceValue, priceValueDolor)
          // const priceData = JSON.stringify(priceValue)
          skillPrice(priceValue);
      });




}



jQuery(document).ready(function(){
  jQuery('.slick-slider-most-blog').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    prevArrow: jQuery('.blog-prev-arrow'),
    nextArrow: jQuery('.blog-next-arrow'),
    responsive: [
        {
            breakpoint: 768, 
            settings: {
                slidesToShow: 1 
            }
        }
    ]
  });

  jQuery('.logo-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 7,
    slidesToScroll: 3,
    autoplay: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          dots: false,
          infinite: true,
          autoplay: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          autoplay: true,
          dots: false,
          infinite: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          dots: false,
          infinite: true,
        }
      }
    ]
  });

  jQuery('#vetted-profile').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          dots: false,
          infinite: true,
          autoplay: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: true,
          dots: false,
          infinite: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          dots: false,
          infinite: true,
        }
      }
    ]
  });

  jQuery('#vetted-profiles-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    arrows:false,
    prevArrow: jQuery('#prev-slide'),
    nextArrow: jQuery('#next-slide'),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          dots: false,
          infinite: true,
          autoplay: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: true,
          dots: false,
          infinite: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          dots: false,
          infinite: true,
        }
      }
    ]
  });

  jQuery('#prev-slide').click(function(e) {
    jQuery('#vetted-profiles-slider').slick('slickNext');
  });
  
  jQuery('#next-slide').click(function(e) {
    jQuery('#vetted-profiles-slider').slick('slickPrev');
  });

  jQuery('#content-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    arrows:false,
    prevArrow: jQuery('#prev-slide'),
    nextArrow: jQuery('#next-slide'),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          infinite: true,
          autoplay: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          dots: false,
          infinite: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          dots: false,
          infinite: true,
        }
      }
    ]
  });

  jQuery('#prev-slide').click(function(e) {
    jQuery('#content-slider').slick('slickNext');
  });
  
  jQuery('#next-slide').click(function(e) {
    jQuery('#content-slider').slick('slickPrev');
  });


  


  priceRateGet()
});

jQuery(function () { // wait for document ready
 
    // define movement of panels

    var x = document.querySelectorAll(".process-slide");
    
    var controllerHire = new ScrollMagic.Controller();

    // define movement of panels
    var wipeAnimationHire = new TimelineMax();
    // var wipeAnimationHire = new TimelineMax()
    // .fromTo(".slide-point-1", 1, {y: "0%", opacity:1,}, {y: "0%",opacity:1, ease: Linear.easeNone})  // in from left
    // .fromTo(".slide-point-2", 1, {y: "20%", opacity:0,}, {y: "0%",opacity:1, ease: Linear.easeNone})  // in from left
    // .fromTo(".slide-point-3", 1, {y:  "20%", opacity:0,}, {y: "0%",opacity:1, ease: Linear.easeNone})  // in from right

    for (let i = 0; i < x.length; i++) {
      const slideClass = `.slide-point-${i+1}`
     if(i == 0){
      wipeAnimationHire.fromTo(slideClass, 1, {y: "0%", opacity:1,}, {y: "0%",opacity:1, ease: Linear.easeNone})
     }else{
      wipeAnimationHire.fromTo(slideClass, 1, {y: "50%", opacity:0,}, {y: "0%",opacity:1, ease: Linear.easeNone})
     }
    }

    // create scene to pin and link animation
    new ScrollMagic.Scene({
        triggerElement: "#pinContainerHire",
        triggerHook: "onLeave",
        duration: "300%",
        offset:-200
      })
      .setPin("#pinContainerHire")
      .setTween(wipeAnimationHire)
      //.addIndicators() // add indicators (requires plugin)
      .addTo(controllerHire);
});


jQuery('.slider-for').slick({
  autoplay: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplaySpeed: 7000,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav',
  pauseOnHover:false
});
jQuery('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  vertical:true,
  asNavFor: '.slider-for',
  dots: false,
  focusOnSelect: true,
  //centerMode:true,
  verticalSwiping:false,
  arrows: false,
  pauseOnHover:false
});


jQuery('#top-scroll').on('click', function() {
  jQuery('html, body').animate({
    scrollTop: jQuery('html, body').offset().top,
  });
});


$('.customerStories').slick({
  dots: true,
  infinite: false,
  speed: 100,
  slidesToShow: 2,
  slidesToScroll: 1,
  centerMode: false,
  focusOnSelect: true,
  autoplay: true,
  arrows: false,
  dots:false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});




jQuery('#prevSlide').click(function(e) {
  jQuery('.customerStories').slick('slickNext');
});

jQuery('#nextSlide').click(function(e) {
  jQuery('.customerStories').slick('slickPrev');
});


