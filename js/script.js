
function menuResponsive(){
    const burgerMenu = document.querySelector('.burgerMenu')
    const headerNav = document.querySelector('#headerNav')
    const closeBTN = document.querySelector('#closeBtn')

    burgerMenu.addEventListener('click', () => {
        headerNav.classList.toggle('activeBurger')
    })

    closeBTN.addEventListener('click', () => {
        headerNav.classList.remove('activeBurger')
    })
}

menuResponsive()


function modal(){
    const modal = document.getElementById("modalHeaderOverlay");
    const btn = document.getElementById("openModalBtn");
    const closeBtn = document.querySelector(".close-modal");

    btn.addEventListener("click", (e) => {
        e.preventDefault(); 
        modal.style.display = "flex";
    });

    closeBtn.addEventListener("click", (e) => {
        e.preventDefault(); 
        modal.style.display = "none";
    });
    
    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });
}

modal()



