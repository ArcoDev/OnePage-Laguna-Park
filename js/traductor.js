var data = null;

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
	if (this.readyState === this.DONE) {
		console.log(this.responseText);
	}
});

xhr.open("GET", "https://google-translate1.p.rapidapi.com/language/translate/v2/languages");
xhr.setRequestHeader("x-rapidapi-host", "google-translate1.p.rapidapi.com");
xhr.setRequestHeader("x-rapidapi-key", "2dcf9f6cabmsh7d143a9457a66bap1b8941jsna948f7c0a998");
xhr.setRequestHeader("accept-encoding", "application/gzip");

xhr.send(data);
