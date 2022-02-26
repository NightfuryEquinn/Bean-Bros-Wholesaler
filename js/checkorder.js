/**
 * Popup Function (Admin Check Order Page) (Inefficient)
 */
 var targetAdminModal1 = document.getElementById("admin-1") 
 var targetAdminOpenButton1 = document.getElementById("adminopen-1")
 var targetAdminCloseButton1 = document.getElementById("adminclose-1")
 
 var targetAdminModal1b = document.getElementById("admin-1b")
 var targetAdminOpenButton1b = document.getElementById("adminroast")
 var targetAdminCloseButton1b = document.getElementById("adminclose-1b")
 
 targetAdminOpenButton1.onclick = () => {
     targetAdminModal1.style.display = "block"
 }
 
 targetAdminCloseButton1.onclick = () => {
     targetAdminModal1.style.display = "none"
 }
 
 targetAdminOpenButton1b.onclick = () => {
     targetAdminModal1b.style.display = "block"
 }
 
 targetAdminCloseButton1b.onclick = () => {
     targetAdminModal1b.style.display = "none"
 }
 
 // Close Popup
 window.onclick = (event) => {
     if (event.target == targetAdminModal1) {
         targetAdminModal1.style.display = "none"
     } else if (event.target = targetAdminModal1b) {
         targetAdminModal1b.stylee.display = "none"
     }
 }
 