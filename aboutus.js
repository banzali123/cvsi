let section = document.querySelectorAll(".section");

window.onscroll = function fadeIn() {
    section.forEach(section => {
        let sectionSize = section.getBoundingClientRect();
        let bottomPart = sectionSize.bottom;
	if (window.scrollY >= bottomPart) {
            section.style.opacity = "1";
            section.style.transform = "translateY(0)";
            section.style.transition = "0.3s ease-in-out";
        } else {
            section.style.opacity = "0";
            section.style.transform = "translateY(-20px)";
            section.style.transition = "0.3s ease-in-out";
        }
    });
}


	setTimeout(function(){
	$('.loader').fadeToggle();
},000);



