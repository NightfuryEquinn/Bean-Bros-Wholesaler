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

/**
 * Popup Function (Customer Profile Page) (Inefficient)
 */
// Edit Personal Details
var targetModal1 = document.getElementById("modal-1")
var targetOpenButton1 = document.getElementById("function-1")
var targetCloseButton1 = document.getElementById("close-1")

targetOpenButton1.onclick = () => {
    targetModal1.style.display = "block"
}

targetCloseButton1.onclick = () => {
    targetModal1.style.display = "none"
}

// Manage Subscription
var targetModal2 = document.getElementById("modal-2")
var targetOpenButton2 = document.getElementById("function-2")
var targetCloseButton2 = document.getElementById("close-2")

targetOpenButton2.onclick = () => {
    targetModal2.style.display = "block"
}

targetCloseButton2.onclick = () => {
    targetModal2.style.display = "none"
}

// Confirm Subscription
var targetModal2b = document.getElementById("modal-2b")
var targetOpenButtonSilver = document.getElementById("change-1")
var targetOpenButtonGold = document.getElementById("change-2")
var targetOpenButtonPlatinum = document.getElementById("change-3")
var targetCloseButton2b = document.getElementById("close-2b")

targetOpenButtonSilver.onclick = () => {
    targetModal2b.style.display = "block"
}

targetOpenButtonGold.onclick = () => {
    targetModal2b.style.display = "block"
}

targetOpenButtonPlatinum.onclick = () => {
    targetModal2b.style.display = "block"
}

targetCloseButton2b.onclick = () => {
    targetCloseButton2b.style.display = "none"
}

// Order Form
var targetModal3 = document.getElementById("modal-3")
var targetOpenButton3 = document.getElementById("function-3")
var targetCloseButton3 = document.getElementById("close-3")

targetOpenButton3.onclick = () => {
    targetModal3.style.display = "block"
}

targetCloseButton3.onclick = () => {
    targetModal3.style.display = "none"
}

// Pending Invoice 
var targetModal3b = document.getElementById("modal-3b")
var targetOpenButton3b = document.getElementById("roast")
var targetCloseButton3b = document.getElementById("close-3b")

targetOpenButton3b.onclick = () => {
    targetModal3b.style.display = "block"
}

targetCloseButton3b.onclick = () => {
    targetModal3b.style.display = "none"
}

// Order History
var targetModal4 = document.getElementById("modal-4")
var targetOpenButton4 = document.getElementById("function-4")
var targetCloseButton4 = document.getElementById("close-4")

targetOpenButton4.onclick = () => {
    targetModal4.style.display = "block"
}

targetCloseButton4.onclick = () => {
    targetModal4.style.display = "none"
}

// Close Popup
window.onclick = (event) => {
    if (event.target == targetModal1) {
        targetModal1.style.display = "none"
    } else if (event.target == targetModal2) {
        targetModal2.style.display = "none"
    } else if (event.target == targetModal2b) {
        targetModal2b.style.display = "none"
    } else if (event.target == targetModal3) {
        targetModal3.style.display = "none"
    } else if (event.target == targetModal3b) {
        targetModal3b.style.display = "none"
    } else if (event.target == targetModal4) {
        targetModal4.style.display = "none"
    }
}

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