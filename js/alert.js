const notifications = document.querySelector(".notifications"),
buttons = document.querySelectorAll(".buttons .btn");

const toastDetails = {
    timer: 1000,
    success: {
        icon: "fa-circle-check",
        text: "Success",
    },
    error: {
        icon: "fa-circle-xmark",
        text: "Error",
    },
    warning: {
        icon: "fa-circle-exclamation",
        text: "Warning",
    },
    info: {
        icon: "fa-circle-info",
        text: "Info",
    }
}
const removeToast = (toast) => {
    toast.classList.add("hide");
    if (toast.timeoutId) clearTimeout(toast.timeoutId);
    setTimeout(() => {toast.remove(),removeOverlay(), 250});
    
}

//กดได้หลายๆครั้ง
// const createToast = (id) => {
//     console.log(id);

//     const {icon, text} = toastDetails[id];

//     const toast = document.createElement("li");
//     toast.className = `toast ${id}`;
//     toast.innerHTML = `<div class="column">
//                             <i class="fa-solid ${icon}"></i>
//                             <span>${text}</span>
//                         </div>
//                         <i class="fa-solid fa-xmark" onclick="removeToast(this.parentElement)"></i>`;
//     notifications.appendChild(toast);
//     toast.timeoutId = setTimeout(() => removeToast(toast), toastDetails.timer);
// }

//กดได้ครั้งเดียว
const createToast = (id) => {

    const activeToasts = document.querySelectorAll('.toast:not(.hide)');
    if (activeToasts.length === 0) {
        const { icon, text } = toastDetails[id];
        createOverlay()
        const toast = document.createElement("li");
        toast.className = `toast ${id}`;
                            //<i class="fa-solid ${icon}"></i>
        toast.innerHTML = `<div class="column">
                                <span>${text}</span> 
                            </div>
                            `; //<i class="fa-solid fa-xmark" onclick="removeToast(this.parentElement)"></i>
        notifications.appendChild(toast);
        toast.timeoutId = setTimeout(() => removeToast(toast), toastDetails.timer);
    }
}

//กดได้ครั้งเดียว + มีพื้นหลัง

const createOverlay = () => {
    const overlay = document.createElement('div');
    overlay.classList.add('overlay');
    document.body.appendChild(overlay);
    return overlay;
}
const removeOverlay = () => {
    const overlay = document.querySelector('.overlay');
    if (overlay) {
        document.body.removeChild(overlay);
    }
}





buttons.forEach(btn => {
    btn.addEventListener("click", () => createToast(btn.id));

});


