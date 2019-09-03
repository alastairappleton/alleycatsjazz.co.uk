var previousPage = "home";

function stopMedia(element) {
  var iframe = element.querySelector("iframe");
  var video = element.querySelector("video");
  if (iframe) {
    var iframeSrc = iframe.src;
    iframe.src = iframeSrc;
  }
  if (video) {
    video.pause();
  }
}

function toggle(pageId) {

  console.log(previousPage);

  pages = document.querySelectorAll("section");

  for (i = 0; i < pages.length; i++) {
    if (pages[i].id == pageId) {
      pages[i].classList.remove("invisible");
    } else {
      pages[i].classList.add("invisible");
    }
  }

  if (previousPage == "media" && pageId != "media") {
    stopMedia(document.getElementById("showreel"));
    stopMedia(document.getElementById("iWannaBeLikeYou"));
  }

  previousPage = pageId;

}
