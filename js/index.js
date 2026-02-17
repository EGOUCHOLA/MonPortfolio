const cadreHeader = document.querySelectorAll(".menu-list>h4");
const cadreCompetence = document.querySelectorAll(".sous-competence");
const cadreButton = document.querySelectorAll("button");
const cadreButtonDownload = document.querySelector(".download");

cadreHeader.forEach((cadreHeader)=>{
    cadreHeader.addEventListener("mouseenter",()=>{
        cadreHeader.classList="cadre-header";
        
    })
    cadreHeader.addEventListener("mouseleave",()=>{
        cadreHeader.classList.remove("cadre-header");
    })
    cadreHeader.addEventListener("click",()=>{
        cadreHeader.classList="cadre-header-click";
    })
})

cadreCompetence.forEach((cadreCompetence)=>{
    cadreCompetence.addEventListener("mouseenter",()=>{
        cadreCompetence.classList="cadre-competence";
    })
    cadreCompetence.addEventListener("mouseleave",()=>{
        cadreCompetence.classList.remove("cadre-competence");
    })
})

cadreButton.forEach((cadreButton)=>{
    cadreButton.addEventListener("mouseenter",()=>{
        cadreButton.classList="cadre-button";
    })
    cadreButton.addEventListener("mouseleave",()=>{
        cadreButton.classList="button";
    })
})

cadreButtonDownload.addEventListener("mouseenter",()=>{
        cadreButtonDownload.classList="cadre-download";
})
cadreButtonDownload.addEventListener("mouseleave",()=>{
        cadreButtonDownload.classList="download";
})

