const tag = document.querySelector(".tag");
const nextTag = document.querySelector("footer img.next");
const prevTag = document.querySelector("footer img.prev");
const randTag = document.querySelector("footer img.random");
let pageNum = 0;


const next = function(){
    pageNum += 1;
    console.log(pageNum)
    updateSection();
}

const prev = function(){
    pageNum -= 1;
    console.log(pageNum)
    updateSection();
}

const updateSection = function(){
    tag.innerHTML ="Hello";
}

nextTag.addEventListener("click", function(){
    next();
})

prevTag.addEventListener("click", function(){
    prev();
})








