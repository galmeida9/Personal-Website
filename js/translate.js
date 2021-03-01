function changeHobbieLang(lang) {
    let jap = document.getElementById("japaneseBio");
    let eng = document.getElementById("englishBioTranslation");
    let jpnButton = document.getElementById("jpnBtn");
    let engButton = document.getElementById("engBtn");

    if (lang === "eng") {
        jap.style.display = "none";
        eng.style.display = "block";
        jpnButton.style.color = "white";
        engButton.style.color = "grey";
    }
    else {
        jap.style.display = "block";
        eng.style.display = "none";
        jpnButton.style.color = "grey";
        engButton.style.color = "white";
    }
}

addAnimationToTimeline();

function addAnimationToTimeline() {
    if (window.innerWidth > 768) {
        document.getElementsByClassName("timeContainer")[0].classList.add("scroll-animated");
    }
    else {
        var lis = document.getElementsByClassName("timelineBubble");
        console.log(lis)
        for (let i = 0; i < lis.length; i++) {
            lis[i].classList.add("scroll-animated");
        }
    }
}