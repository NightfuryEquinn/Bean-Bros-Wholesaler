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