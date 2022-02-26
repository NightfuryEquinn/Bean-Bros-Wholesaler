/**
 *  Popup Function (Bean Page)
 * */ 
function popup(num, imgurl) {
    // Get the modal
    var modal = document.getElementById("myModal");

    var newnum = parseInt(num);
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementsByClassName("product-container")[num];
    var modalImg = document.getElementById("img1");
    var captionText = document.getElementById("caption");
    var description = document.getElementById("imgPopUp").alt;

    var content = document.getElementsByClassName("content")[0];
    var name = document.getElementsByClassName("desc-name")[0];
    var country = document.getElementsByClassName("desc-country")[0];
    var roast = document.getElementsByClassName("desc-roast")[0];
    var price = document.getElementsByClassName("desc-price")[0];

    var content1 = document.getElementsByClassName("content")[newnum + 1].innerHTML;
    var name1 = document.getElementsByClassName("desc-name")[newnum + 1].innerHTML;
    var country1 = document.getElementsByClassName("desc-country")[newnum + 1].innerHTML;
    var roast1 = document.getElementsByClassName("desc-roast")[newnum + 1].innerHTML;
    var price1 = document.getElementsByClassName("desc-price")[newnum + 1].innerHTML;

    if (img.onclick){
    modal.style.display = "block";
    modalImg.src = imgurl;
    captionText.innerHTML = description;
    content.innerHTML = content1;
    name.innerHTML = name1;
    country.innerHTML = country1;
    roast.innerHTML = roast1;
    price.innerHTML = price1;
    }
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
        modal.style.display = "none";
    }
}