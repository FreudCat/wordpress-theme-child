const blurValue = getComputedStyle(document.querySelector("#to-blur")).filter;

// As user scrolls down, the parallax image blurs, and unblurs as user scrolls up
// Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
window.addEventListener("scroll", function () {
	let scrolled = window.pageYOffset || document.documentElement.scrollTop;
	if (scrolled > 0) {
		document.querySelector("#to-blur").style.filter = `blur(${scrolled / 25}px)`;
	}
});
