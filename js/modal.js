$('.button').click(function(){
    var buttonId = $(this).attr('id');
    $('#modal-container').removeAttr('class').addClass(buttonId);
    $('body').addClass('modal-active');
  })
  
  $('#modal-container').click(function(){
    $(this).addClass('out');
    $('body').removeClass('modal-active');
  });

function setModalInfo(title, img, link) {
    document.getElementById("modalTitle").innerText = title
    document.getElementById("modalImg").src = "img/work/" + img
    
    if (link != null) {
        document.getElementById("modalGit").style.display = "block"
        document.getElementById("modalGit").href = "https://github.com/" + link
        document.getElementById("modalGitTitle").href = "https://github.com/" + link
    }
    else {
        document.getElementById("modalGit").style.display = "none"
    }
}