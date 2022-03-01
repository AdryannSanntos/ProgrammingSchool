//up-menu
const button = document.getElementById("button");
const header = document.getElementById("header");
let open1 = true;
//sidebar
const button2 = document.getElementById("button2");
const side = document.getElementById("side");
let open2 = true;
//right-menu
const button3 = document.getElementById("button3");
const right = document.getElementById("container-right");
const left = document.getElementById("container-left");
let open3 = false;

button.addEventListener('click', () =>{
  if(open1){
    header.style.display = 'none';
    open1 = false;
  }else{
    header.style.display = 'flex';
    open1 = true;
  }
})

button2.addEventListener('click', () =>{
  if(open2){
    side.style.display = 'none';
    open2 = false;
  }else{
    side.style.display = 'block';
    open2 = true;
  }
})

button3.addEventListener('click', () =>{
  if(open3){
    right.style.display = 'none';
    left.style.width = '100%';
    open3 = false;
  }else{
    right.style.display = 'block';
    left.style.width = '70%';
    open3 = true;
  }
})