function initial_dialog(){
	
}

function open_dialog(text){
	
	$("#dialog").html(text);
	$("#dialog").dialog("open");
	
}
function round(num){

	return Math.ceil(num*100)/100;
}
let toastIdCounter = 0;
function showAdminToast(message, type = "success") {
    let container = document.querySelector(".toast-container");
    if (!container) {
        container = document.createElement("div");
        container.className = "toast-container";
        document.body.appendChild(container);
    }
    const id = ++toastIdCounter;
    const toastItem = document.createElement("div");
    toastItem.className = `toast-item ${type}`;
    toastItem.id = `toast-${id}`;
    
    let iconSvg = "";
    if (type === "success") {
        iconSvg = `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>`;
    } else if (type === "error") {
        iconSvg = `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>`;
    } else {
        iconSvg = `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>`;
    }
    
    toastItem.innerHTML = `
        <div class="toast-icon">${iconSvg}</div>
        <span class="toast-message">${message}</span>
        <button class="toast-close" onclick="removeAdminToast(${id})">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
        <div class="toast-progress ${type}"></div>
    `;
    
    container.appendChild(toastItem);
    
    setTimeout(() => {
        toastItem.classList.add("toast-visible");
    }, 50);
    
    setTimeout(() => removeAdminToast(id), 5000);
}

function removeAdminToast(id) {
    const toastItem = document.getElementById(`toast-${id}`);
    if (toastItem) {
        toastItem.classList.remove("toast-visible");
        setTimeout(() => {
            toastItem.remove();
        }, 400);
    }
}

