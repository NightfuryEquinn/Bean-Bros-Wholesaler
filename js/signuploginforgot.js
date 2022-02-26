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