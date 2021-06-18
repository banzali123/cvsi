const navSlide = () => {
	const burger = document.querySelector('.burger');
	const nav = document.querySelector('.nav-links');
	const navLinks = document.querySelectorAll('.nav-links li');
	
	burger.addEventListener('click',() => {
		nav.classList.toggle('nav-active');

	
	navLinks.forEach((link,index) => {
		if(link.style.animation){
		   link.style.animation = '';
		   link.style.display = 'none';		   
		}else{
			link.style.animation = `navLinkFade 0.1s ease forwards ${index / 19 + 0.1}s`; 
			link.style.display = 'block';	
		}
	});
	//burger Animation
	burger.classList.toggle('toggle');

  });
}
navSlide();