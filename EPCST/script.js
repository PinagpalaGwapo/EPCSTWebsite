const boxContainer = document.querySelector(".box-container");

const boxes = document.querySelectorAll(".box");
let currentIndex = 0;
const numVisibleBoxes = 3;

function updateSlider() {
    boxContainer.style.transform = `translateX(-${currentIndex * 170}px)`;
}

function makeBigger(box) {
    var courseInfoDiv = box.querySelector('.course-info');

    box.style.transform = "scale(1.5)";
    box.style.width = "300px";
    box.style.height = "290px";
    box.style.zIndex = "9999"; 
    courseInfoDiv.style.display = 'block';
}

function makeNormal(box) {
    var courseInfoDiv = box.querySelector('.course-info');

    box.style.transform = "scale(1)";
    box.style.width = "250px";
    box.style.height = "250px"
    box.style.zIndex = "1"; 
    courseInfoDiv.style.display = 'none';
}

function updateBoxVisibility() {
    for (let i = 0; i < boxes.length; i++) {
        if (i >= currentIndex && i < currentIndex + numVisibleBoxes) {
            boxes[i].style.display = 'block';
        } else {
            boxes[i].style.display = 'none';
        }
    }
}

function slidePrev() {
    if (currentIndex > 0) {
        currentIndex -= 1;
        updateBoxVisibility();
    }
}

function slideNext() {
    if (currentIndex + numVisibleBoxes < boxes.length) {
        currentIndex += 1;
        updateBoxVisibility();
    }
}

updateBoxVisibility(); 

