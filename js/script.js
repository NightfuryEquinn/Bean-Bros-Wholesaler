/**
 * Popup Function (Customer Profile Page) (Inefficient)
 */
// Modals
var targetModal1 = document.getElementById("modal-1")
var targetModal2 = document.getElementById("modal-2")
var targetModal2b = document.getElementById("modal-2b")
var targetModal3 = document.getElementById("modal-3")
var targetModal4 = document.getElementById("modal-4")

// Edit Personal Details
function edit() {
    var targetOpenButton1 = document.getElementById("function-1")
    var targetCloseButton1 = document.getElementById("close-1")

    targetOpenButton1.onclick = () => {
        targetModal1.style.display = "block"
    }

    targetCloseButton1.onclick = () => {
        targetModal1.style.display = "none"
    }
}

// Manage Subscription
var targetOpenButton2 = document.getElementById("function-2")
var targetCloseButton2 = document.getElementById("close-2")

function manage() {
    targetOpenButton2.onclick = () => {
        targetModal2.style.display = "block"
    }

    targetCloseButton2.onclick = () => {
        targetModal2.style.display = "none"
    }
}

// Confirm Subscription
var targetOpenButtonSilver = document.getElementById("change-1")
var targetOpenButtonGold = document.getElementById("change-2")
var targetOpenButtonPlatinum = document.getElementById("change-3")
var targetCloseButton2b = document.getElementById("close-2b")
var targetTitle = document.getElementsByClassName("confirm-subscription-notes")[0].getElementsByTagName("p")[0]
var targetSub = document.getElementById("sub")

function silver() {
    targetTitle.innerHTML = "You are changing your subscription to Silver."
    targetSub.value = "Silver"

    targetOpenButtonSilver.onclick = () => {
        targetModal2b.style.display = "block"
    }

    targetCloseButton2b.onclick = () => {
        targetModal2b.style.display = "none"
    }
}

function gold() {
    targetTitle.innerHTML = "You are changing your subscription to Gold."
    targetSub.value = "Gold"

    targetOpenButtonGold.onclick = () => {
        targetModal2b.style.display = "block"
    }

    targetCloseButton2b.onclick = () => {
        targetModal2b.style.display = "none"
    }
}

function platinum() {
    targetTitle.innerHTML = "You are changing your subscription to Platinum."
    targetSub.value = "Platinum"

    targetOpenButtonPlatinum.onclick = () => {
        targetModal2b.style.display = "block"
    }

    targetCloseButton2b.onclick = () => {
        targetModal2b.style.display = "none"
    }
}

// Order Form
var targetOpenButton3 = document.getElementById("function-3")
var targetCloseButton3 = document.getElementById("close-3")

function order() {
    targetOpenButton3.onclick = () => {
        targetModal3.style.display = "block"
    }

    targetCloseButton3.onclick = () => {
        targetModal3.style.display = "none"
    }
}

// Order History
var targetOpenButton4 = document.getElementById("function-4")
var targetCloseButton4 = document.getElementById("close-4")

function view() {
    targetOpenButton4.onclick = () => {
        targetModal4.style.display = "block"
    }

    targetCloseButton4.onclick = () => {
        targetModal4.style.display = "none"
    }
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
    } else if (event.target == targetModal4) {
        targetModal4.style.display = "none"
    } 
}

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

window.onload = rndm;

var img_name = new Array("../img/Coffee1.jpg", "../img/Coffee2.jpg","../img/Coffee3.jpg");

function rndm(){
    var rnd_no = Math.floor(Math.random() * myPix.length);
    document.getElementById("randomimage").src = img_name[rnd_no];
}    
