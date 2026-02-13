const cadreCompetence = document.querySelectorAll(".sous-competence");
const cadreButton = document.querySelectorAll("button");
const cadreButtonDownload = document.querySelector(".download");
cadreCompetence.forEach((cadreCompetence)=>{
    cadreCompetence.addEventListener("mouseenter",()=>{
        cadreCompetence.classList="cadre-competence";
    })
    cadreCompetence.addEventListener("mouseleave",()=>{
        cadreCompetence.classList="competence-one > div";
    })
})

cadreButton.forEach((cadreButton)=>{
    cadreButton.addEventListener("mouseenter",()=>{
        cadreButton.classList="cadre-button"
    })
    cadreButton.addEventListener("mouseleave",()=>{
        cadreButton.classList="button"
    })
})

cadreButtonDownload.addEventListener("mouseenter",()=>{
        cadreButtonDownload.classList="cadre-download"
})
cadreButtonDownload.addEventListener("mouseleave",()=>{
        cadreButtonDownload.classList="download"
})

