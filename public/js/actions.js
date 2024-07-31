let links = document.querySelectorAll(".nav-link");
links.forEach((element) => {
    element.pathname == window.location.pathname
        ? element.classList.add("active")
        : element.classList.remove("active");
});

let switchBtns = document.querySelectorAll(".post-btns .btn-cat");
let allCards = document.querySelectorAll(".post-content .all");
let cardArray = Array.from(allCards);

switchBtns.forEach((btn) => {
    // manage cards
    btn.addEventListener("click", function () {
        cardArray.forEach((card) => {
            card.classList.add("card-none");
        });

        let cardShow = document.querySelectorAll(
            "." + this.getAttribute("data-cityId")
        );

        cardShow.forEach((card) => {
            card.classList.remove("card-none");
        });
    });
});
