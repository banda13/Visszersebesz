
function make_modal_image(modalId, imageId, modalImageId, captionTextId, closeId) {
    var modal = document.getElementById(modalId);

    var img = document.getElementById(imageId);
    var modalImg = document.getElementById(modalImageId);
    var captionText = document.getElementById(captionTextId);
    img.onclick = function () {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };

    var span = document.getElementById(closeId);

    span.onclick = function () {
        modal.style.display = "none";
    }
}
