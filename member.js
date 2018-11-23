// JavaScript Document
function phoneNumber(document) {
    var ph = document.getElementById("ph");
    var ph_msg = document.getElementById("ph_msg");
    var isNum = /^[0-9]{12}$/.test(ph.value); // 4 digits
    if(!isNum) {
        ph_msg.innerHTML = "Enter a valid contact number.";
        ph.focus();
        return false;
    }
    else {
        ph_msg.innerHTML = "";
    }
    return true;

function validateInfo(document) {
    if (phoneNumber(document) )
    {
        return true;
    }
    return false;
}
