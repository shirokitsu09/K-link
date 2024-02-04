const tabsBox = document.querySelector(".tabs-box");
allTabs = document.querySelectorAll(".tab");
arrowIcons = document.querySelectorAll(".icon i");

let isDragging = false;


const handleIcons = () => {
    let scrollVal = Math.round(tabsBox.scrollLeft);
    let maxScrollableWidth = tabsBox.scrollWidth - tabsBox.clientWidth;
    console.log(maxScrollableWidth , scrollVal);
    arrowIcons[0].parentElement.style.display = scrollVal > 0 ? "flex" : "none";
    arrowIcons[1].parentElement.style.display = maxScrollableWidth > scrollVal ? "flex" : "none";
}


arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        // console.log(icon.id);
        tabsBox.scrollLeft += icon.id === "left" ? -350 : 350;
        setTimeout(() => handleIcons(), 50);
    });

});

allTabs.forEach(tab => {
    tab.addEventListener("click", () => {
        tabsBox.querySelector(".active").classList.remove("active");
        tab.classList.add("active");
    });

});

const dragging = (e) => {
    // console.log("dragging...")
    if(!isDragging) return;
    tabsBox.classList.add("dragging");
    tabsBox.scrollLeft -= e.movementX;
    handleIcons();
}

const dragStop = () => {
    isDragging = false;
    tabsBox.classList.remove("dragging");
}


tabsBox.addEventListener("mousedown", () => isDragging = true);
tabsBox.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);







