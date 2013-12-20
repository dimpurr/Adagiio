function scroll_top(){
	var scrollPos;
	if (typeof window.pageYOffset != 'undefined') {
		 scrollPos = window.pageYOffset;
	}
	else if (typeof document.compatMode != 'undefined' &&
		 document.compatMode != 'BackCompat') {
		 scrollPos = document.documentElement.scrollTop; 
	}
	else if (typeof document.body != 'undefined') {
		 scrollPos = document.body.scrollTop;
	}
	return scrollPos;
}

function scroll_nav() {
	var nav = document.getElementById("nav");
	if (scroll_top() > 100) {
		nav.className = "nav_s";
	} else {
		nav.className = "";
	}
}

window.onscroll = scroll_nav;