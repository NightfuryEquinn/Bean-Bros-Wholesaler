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