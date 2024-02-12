const btnLeft = document.querySelector(".left");
const btnRight = document.querySelector(".right");
const tabMenu = document.querySelector(".tab-menu");

const IconVisibility = () => {
    let scrollLeftValue = Math.ceil(tabMenu.scrollLeft);

    let scrollableWidth = tabMenu.scrollWidth - tabMenu.clientWidth;

    //OLD VERSION
    // btnLeft.style.display = scrollLeftValue > 0 ? "block" : "none";
    // btnRight.style.display = scrollableWidth > scrollLeftValue ? "block" : "none";

    //NEW VERSION
    btnLeft.style.display = scrollLeftValue > 0 ? "none" : "none";
    btnRight.style.display = scrollableWidth > scrollLeftValue ? "none" : "none";

    console.log(scrollableWidth ,scrollLeftValue);
}


btnRight.addEventListener("click", () => {
    tabMenu.scrollLeft += 150;
    setTimeout(() => IconVisibility(),50);
    
});

btnLeft.addEventListener("click", () => {
    tabMenu.scrollLeft -= 150;
    setTimeout(() => IconVisibility(),50);
});

window.onload = function(){
    // btnRight.style.display = tabMenu.scrollWidth > tabMenu.clientWidth || tabMenu.scrollWidth >= window.innerWidth ? "block" : "none";
    btnRight.style.display = tabMenu.scrollWidth > tabMenu.clientWidth || tabMenu.scrollWidth >= window.innerWidth ? "none" : "none";
    btnLeft.style.display = tabMenu.scrollWidth >= window.innerWidth ? "" : "none";
}

window.onresize = function(){
    // btnRight.style.display = tabMenu.scrollWidth > tabMenu.clientWidth || tabMenu.scrollWidth >= window.innerWidth ? "block" : "none";
    btnRight.style.display = tabMenu.scrollWidth > tabMenu.clientWidth || tabMenu.scrollWidth >= window.innerWidth ? "none" : "none";
    btnLeft.style.display = tabMenu.scrollWidth >= window.innerWidth ? "" : "none";

    let scrollLeftValue = Math.round(tabMenu.scrollLeft);

    btnLeft.style.display = scrollLeftValue > 0 ? "block" : "none";
}

// ================================destop==========================
let activeDragDestop = false;

tabMenu.addEventListener("mousemove", (drag) => {
    if(!activeDragDestop) return;
    tabMenu.scrollLeft -= drag.movementX;
    IconVisibility();
    tabMenu.classList.add("dragging");
});

document.addEventListener("mouseup", () => {
    activeDragDestop = false;
    tabMenu.classList.remove("dragging");
});

tabMenu.addEventListener("mousedown", () => {
    activeDragDestop = true;
});

// ================================phone==========================
let activeDragPhone = false;
let startX = 0;

tabMenu.addEventListener("touchmove", (event) => {
    if (!activeDragPhone) return;
    const touch = event.touches[0];
    tabMenu.scrollLeft -= touch.clientX - startX;
    IconVisibility();
    tabMenu.classList.add("dragging");
    startX = touch.clientX;
});

document.addEventListener("touchend", () => {
    activeDragPhone = false;
    tabMenu.classList.remove("dragging");
});

tabMenu.addEventListener("touchstart", (event) => {
    activeDragPhone = true;
    const touch = event.touches[0];
    startX = touch.clientX;
});
// ==================================================================

const tabBtns = document.querySelectorAll(".tab-btn");

tabBtns.forEach(tabBtn => {
    tabBtn.addEventListener("click", () => {
        const isActive = tabBtn.classList.contains("active");

        if (!isActive) {
            tabBtn.classList.add("active");
        } else {
            tabBtn.classList.remove("active");
        }
    });
});
