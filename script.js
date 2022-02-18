/**
 * FAQs Dropdown (Inefficient)
 */
function dropdown1() {
    var target = document.getElementsByClassName("answer")[0]
    target.classList.toggle("active-answer")
    var target2 = document.getElementsByClassName("question")[0].getElementsByTagName("i")[0]
    target2.classList.toggle("active-i")
}

function dropdown2() {
    var target = document.getElementsByClassName("answer")[1]
    target.classList.toggle("active-answer")
    var target2 = document.getElementsByClassName("question")[1].getElementsByTagName("i")[0]
    target2.classList.toggle("active-j")

}

function dropdown3() {
    var target = document.getElementsByClassName("answer")[2]
    target.classList.toggle("active-answer")
    var target2 = document.getElementsByClassName("question")[2].getElementsByTagName("i")[0]
    target2.classList.toggle("active-i")
}

function dropdown4() {
    var target = document.getElementsByClassName("answer")[3]
    target.classList.toggle("active-answer")
    var target2 = document.getElementsByClassName("question")[3].getElementsByTagName("i")[0]
    target2.classList.toggle("active-j")
}

/**
 * Input Area Toggle (Inefficient)
 */
 var aim = document.getElementsByClassName("signup-input-area")[0]
 var aim2 = document.getElementsByClassName("login-input-area")[0]
 var aim3 = document.getElementsByClassName("forgot-password-input-area")[0]
 var aim4 = document.getElementsByClassName("forgot-username-input-area")[0]

function select1() {
    aim.style.display = "flex"
    aim2.style.display = "none"
    aim3.style.display = "none"
    aim4.style.display = "none"
}
 
function select2() {
    aim.style.display = "none"
    aim2.style.display = "flex"
    aim3.style.display = "none"
    aim4.style.display = "none"
}

function select3() {
    aim.style.display = "none"
    aim2.style.display = "none"
    aim3.style.display = "flex"
    aim4.style.display = "none"
}

function select4() {
    aim.style.display = "none"
    aim2.style.display = "none"
    aim3.style.display = "none"
    aim4.style.display = "flex"
}

function popup(num, imgurl) {
    // Get the modal
    var modal = document.getElementById("myModal");

    var newnum = parseInt(num);
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementsByClassName("product-container")[num];
    var modalImg = document.getElementById("img1");
    var captionText = document.getElementById("caption");
    var description = document.getElementById("imgPopUp").alt;

    var name = document.getElementsByClassName("desc-name")[0];
    var country = document.getElementsByClassName("desc-country")[0];
    var roast = document.getElementsByClassName("desc-roast")[0];
    var price = document.getElementsByClassName("desc-price")[0];

    var name1 = document.getElementsByClassName("desc-name")[newnum + 1].innerHTML;
    var country1 = document.getElementsByClassName("desc-country")[newnum + 1].innerHTML;
    var roast1 = document.getElementsByClassName("desc-roast")[newnum + 1].innerHTML;
    var price1 = document.getElementsByClassName("desc-price")[newnum + 1].innerHTML;

    if (img.onclick){
    modal.style.display = "block";
    modalImg.src = imgurl;
    captionText.innerHTML = description;
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