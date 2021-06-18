window.addEventListener('scroll',function(){
		var scroll = document.querySelector('.scrollTop');
		scroll.classList.toggle("active" , window.scrollY > 500)
})



function scrollToTop(){
		window.scrollTo({
			top: 0,
			behavior: 'smooth'
		})
}
		

		
		

	setTimeout(function(){
	$('.loader').fadeToggle();
},3000);


$('.testimonials').slick({

  fade: true,
      autoplay: true,
  autoplaySpeed: 3000,
  cssEase: 'linear'
});




		
		
		var a = 0;
$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    a = 1;
  }

});




$('.basic').slick({

    autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 5,
  slidesToScroll: 1,

  responsive: [
    {
      breakpoint: 1024,
      settings:  {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,

      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});




const faders = document.querySelectorAll('.fade-in');
const sliders = document.querySelectorAll('.slide-in');
const sliders1 = document.querySelectorAll('.slide-in1');
const sliders2 = document.querySelectorAll('.slide-in2');
const appearOptions = {
	threshold: 0,
	rootMargin: "0px 0px -400px 0px"
};

const appearOnScroll = new IntersectionObserver
(function(
		entries, 
		appearOnScroll
)	{
	entries.forEach(entry => {
		if(!entry.isIntersecting) {
		  return;
		} else {
		  entry.target.classList.add("appear");
		  appearOnScroll.unobserve(entry.target);
		}
	});	
},
appearOptions);

faders.forEach(fader => {
	appearOnScroll.observe(fader);
});

sliders.forEach(slider => {
	appearOnScroll.observe(slider);
});

sliders1.forEach(slider => {
	appearOnScroll.observe(slider);
});

sliders2.forEach(slider => {
	appearOnScroll.observe(slider);
});





var btn = document.getElementsByClassName("btn");
var slide = document.getElementById("slide");

btn[0].onclick = function(){
	slide.style.transform = "translateX(0px)";
	for(i=0;i<4;i++){
		btn[i].classList.remove("active");
}
this.classList.add("active");
}
btn[1].onclick = function(){
	slide.style.transform = "translateX(-725px)";
		for(i=0;i<4;i++){
		btn[i].classList.remove("active");
}
this.classList.add("active");
}
btn[2].onclick = function(){
	slide.style.transform = "translateX(-1450px)";
		for(i=0;i<4;i++){
		btn[i].classList.remove("active");
}
this.classList.add("active");
}
btn[3].onclick = function(){
	slide.style.transform = "translateX(-2175px)";
		for(i=0;i<4;i++){
		btn[i].classList.remove("active");
}
this.classList.add("active");
}

