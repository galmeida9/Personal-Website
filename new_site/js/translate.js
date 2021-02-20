function changeHobbieLang() {
    let jap = document.getElementById("japaneseBio");
    let eng = document.getElementById("englishBioTranslation");

    if (jap.style.display == "block") {
        jap.style.display = "none";
        eng.style.display = "block";
    }
    else {
        jap.style.display = "block";
        eng.style.display = "none";
    }
}