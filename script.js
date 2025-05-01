document.addEventListener("DOMContentLoaded", () => {
    const menu = document.querySelector("#menu");
    const nav = document.querySelector(".links");

    menu.onclick = () => {
        nav.classList.toggle('active'); 
    };
});
