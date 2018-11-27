// image gallery for the museum image galleries
$(document).ready(function () {
    $('.gallery img').on({
      click: function () {
        // on click, change the current image url to the url from the image clicked by the user on the gallery.
        var imageURL = $(this).attr('src');
        // sets fade in and fade out timer so the images to not appear suddenly.
          $('#galleryMain').fadeOut(800, function () {
            $(this).attr('src', imageURL);
              }).fadeIn(800);
        }
    });
});
