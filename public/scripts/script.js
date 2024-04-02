
if (document.getElementById("newCat")) {
const newCat = document.getElementById("newCat");
const catSlug = document.getElementById('catSlug');
newCat.addEventListener("input", updateSlug);
}

if (document.getElementById("newItem")) {
    const newItem = document.getElementById("newItem");
    const catSlug = document.getElementById('catSlug');
    newItem.addEventListener("input", updateSlug);
    }


window.addEventListener('resize', displayScreenWidth); 
function displayScreenWidth() { 
    const screenwidth = document.getElementById("screenwidth");
    let theWidth = window.innerWidth;                                             
    screenwidth.innerHTML = 'The screen width is: ' + theWidth;
}
displayScreenWidth();




function updateSlug() {
    let changedName = this;
    let slugBefore = changedName.value;
    let slugArray = [];


for (let i = 0; i < slugBefore.length; i++) {
    if (/[!@#$%'^"=:<>&,;*(§)_+]/.test(slugBefore[i])) {
        slugArray.push("_");
    }else {
    slugBefore[i] === " " ? slugArray.push("-") :
     slugBefore[i] === "é" ? slugArray.push("e") :
      slugBefore[i] === "è" ? slugArray.push("e") :
       slugBefore[i] === "à" ? slugArray.push("a") :
        slugBefore[i] === "À" ? slugArray.push("a") :
         slugBefore[i] === "ç" ? slugArray.push("c") :
          slugBefore[i] === "Ç" ? slugArray.push("c") :
           slugBefore[i] === "?" ? slugArray.push("_qm_") :
            slugBefore[i] === "/" ? slugArray.push("_slash_") :
             slugBefore[i] === "ù" ? slugArray.push("u") :
              slugBefore[i] === "." ? slugArray.push("_fs_") : slugArray.push(slugBefore[i].toLowerCase());
    }
    let slugAfter = slugArray.join("");
    catSlug.value = slugAfter;
    
}
}
