let btn_page = document.querySelector("header nav .btn button");
let btn_logo = document.querySelector("header nav .logo img");
let btn_start = document.querySelector("div.Start > div > div > button");
let btn_invertimg = document.querySelector("section.investing > div > div > button");
let bnt_sibmit = document.querySelector("div.login-form > div > div > .form > div.f-right > div.btn > button");
let input_text = [...document.querySelectorAll("div.login-form > div > div > .form > div >  div > [data-fotm]")];
let err = [];
// cearte function move location
let addUrl = (element, url) => element.addEventListener("click", _ => window.location.href = url);
// cearte function dcroll body for top
let scroll_body = (element) => element.addEventListener("click", _ => window.scroll({ top: 100, behavior: "smooth" }));
// ceate function add class
let add_class = (elemnt,nameClass) => elemnt.classList.add(nameClass);
// ceate function add remove
let remove_class = (elemnt, nameClass) => elemnt.classList.remove(nameClass);
// cearte function in loop for input with add class err
let input_err = (inputs) => [...inputs].forEach(err => add_class(input_text[err],"input-err"));
// cearte function check input  name
let check_name = _ => {
    if (input_text[0].value != "" && input_text[0].value.length > 4) return;
    err.push("0");
}
// cearte function check input  email
let check_email = _ => {
    if (input_text[1].value.includes("@") && input_text[1].value.includes(".")) return;
    err.push("1");
}
// cearte function check input  phone
let check_phone = _ => {
    if (!isNaN(input_text[2].value) && input_text[2].value != "") return;
    err.push("2");
}
// cearte function check input  message
let check_message = _ => {
    if (input_text[3].value != "") return;
    err.push("3");
}
btn_page.firstElementChild ? addUrl(btn_page, "./") : addUrl(btn_page, "./contact_me.php");
btn_page.firstElementChild ? scroll_body(btn_start) : addUrl(btn_start, "./contact_me.php");
btn_page.firstElementChild ? null : addUrl(btn_invertimg, "./contact_me.php");
addUrl(btn_logo, "./");
input_text.forEach(focus =>
    focus.addEventListener("focus",_=>{
        if (focus.classList.contains("input-err")) remove_class(focus,"input-err");
    })
);
bnt_sibmit.addEventListener("click", (e) => {
    check_name();
    check_email();
    check_phone();
    check_message();
    if(err.length != 0){
        input_err(err);
        err = [];
        return;
    }
    console.log("yes");

});
