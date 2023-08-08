//--------------Header------------------
const header = document.querySelector("header")
window.addEventListener("scroll",function(){
    x = window.pageYOffset
    if(x>0){
        header.classList.add("sticky")
    }
    else{
        header.classList.remove("sticky")
    }
})

//----------Scroll-Menu-items-------//
const toP = document.querySelector(".top")
window.addEventListener("scroll",function(){
    const X = this.pageYOffset;
    if(x>1){toP.classList.add("active")}
    else{
        toP.classList.remove("active")
    }
})

//-------------Menu-slidebar-category-------------
const itemSlidebar = document.querySelectorAll(".category-left-li")
itemSlidebar.forEach(function(menu,index){
    menu.addEventListener("click",function(){
        menu.classList.toggle("block")
    })
})

//------------Product---------------//
const mainImg = document.querySelector(".main-img img")
const subImg = document.querySelectorAll(".sub-img img")
subImg.forEach(function(imgItem,X){
    imgItem.addEventListener("click",function(){
        mainImg.src =imgItem.scr
    })
})


// const tab_item = document.querySelectorAll(".tab-item")
// const tab_content = document.querySelectorAll(".tab-content")
// if(tab_item == ".active"){
//     x = length
// }


