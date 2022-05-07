function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.effectAllowed = "move";
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  ev.dataTransfer.dropEffect = "move";
  if (ev.target.tagName === "IMG") {
    ev.target
      .closest("div")
      .appendChild(document.getElementById(ev.dataTransfer.getData("text")));
  } else if (ev.target.querySelector(".tierlistImgs")) {
    ev.target
      .querySelector(".tierlistImgs")
      .appendChild(document.getElementById(ev.dataTransfer.getData("text")));
  } else if (ev.target.classList.contains("tierlistImgs")) {
    ev.target.appendChild(
      document.getElementById(ev.dataTransfer.getData("text"))
    );
  } else {
    ev.target
      .closest("div")
      .querySelector(".tierlistImgs")
      .appendChild(document.getElementById(ev.dataTransfer.getData("text")));
  }
}
var tierlistLine = document.querySelector(".tierlistLine");
var tierlistDiv = [];
var tierlistCross = [];
var tierlistDivTitle = [];
var pickerColor = [];
var arrowUp = [];
var arrowDown = [];
var contain1 = [];
var contain2 = [];

updateSelector();
newLine();
init();

function init() {
  for (let i = 0; i < tierlistCross.length; i++) {
    updateColor(i);
    updateTitle(i);
    moveUp(i);
    moveDown(i);
    removeLine(i);
  }
}

function newLine() {
  document.querySelector(".addLine").addEventListener("click", function () {
    var temp, item, a;
    temp = document.getElementsByTagName("template")[0];
    item = temp.content.querySelector("div");
    a = document.importNode(item, true);
    tierlistLine.appendChild(a);
    updateSelector();
    updateColor(pickerColor.length - 1);
    updateTitle(tierlistDivTitleInput.length - 1);
    removeLine(tierlistCross.length - 1);
    moveUp(arrowUp.length - 1);
    moveDown(arrowUp.length - 1);
  });
}

function updateColor(i) {
  tierlistDivTitle[i].style.backgroundColor = tierlistDivTitle[i].dataset.color;
  pickerColor[i].value = tierlistDivTitle[i].dataset.color;
  pickerColor[i].addEventListener("change", function () {
    tierlistDivTitle[i].style.backgroundColor = pickerColor[i].value;
    tierlistDivTitle[i].dataset.color = pickerColor[i].value;
  });
}

function updateTitle(i) {
  tierlistDivTitleInput[i].value = tierlistDivTitleInput[i].dataset.title;
  tierlistDivTitleInput[i].addEventListener("keyup", function () {
    tierlistDivTitleInput[i].dataset.title = tierlistDivTitleInput[i].value;
  });
}

function moveUp(i) {
  arrowUp[i].addEventListener("click", function () {
    updateSelector();
    if (i > 0) {
      contain1 = tierlistDiv[i].innerHTML;
      contain2 = tierlistDiv[i - 1].innerHTML;
      tierlistDiv[i].innerHTML = contain2;
      tierlistDiv[i - 1].innerHTML = contain1;
    }
    updateSelector();
    if (i > 0) {
      updateColor(i - 1);
      updateTitle(i - 1);
      removeLine(i - 1);
      moveUp(i - 1);
      moveDown(i - 1);
    }
    updateColor(i);
    updateTitle(i);
    removeLine(i);
    moveUp(i);
    moveDown(i);
  });
}

function moveDown(i) {
  arrowDown[i].addEventListener("click", function () {
    updateSelector();
    if (i < arrowDown.length - 1) {
      contain1 = tierlistDiv[i].innerHTML;
      contain2 = tierlistDiv[i + 1].innerHTML;
      tierlistDiv[i].innerHTML = contain2;
      tierlistDiv[i + 1].innerHTML = contain1;
    }
    updateSelector();
    if (i < arrowDown.length - 1) {
      updateColor(i + 1);
      updateTitle(i + 1);
      removeLine(i + 1);
      moveUp(i + 1);
      moveDown(i + 1);
    }
    updateColor(i);
    updateTitle(i);
    removeLine(i);
    moveUp(i);
    moveDown(i);
  });
}

function removeLine(i) {
  tierlistCross[i].addEventListener("click", function () {
    if (tierlistDiv[i].getElementsByTagName("img").length === 0) {
      updateSelector();
      for (let j = i; j < arrowUp.length; j++) {
        tierlistDiv[j].innerHTML = tierlistDiv[j + 1].innerHTML;
        if (j < arrowUp.length - 1) {
          updateSelector();
          updateColor(j);
          updateTitle(j);
          removeLine(j);
          moveUp(j);
          moveDown(j);
        }
      }
      tierlistDiv[arrowUp.length - 1].parentNode.removeChild(
        tierlistDiv[arrowUp.length - 1]
      );
    }
  });
}

function updateSelector() {
  tierlistDiv = [];
  tierlistCross = [];
  tierlistDivTitle = [];
  pickerColor = [];
  arrowUp = [];
  arrowDown = [];
  contain1 = [];
  contain2 = [];
  tierlistDiv = Array.from(document.querySelectorAll(".tierlistDiv"));
  tierlistCross = Array.from(document.querySelectorAll(".tierlistCross"));
  tierlistDivTitle = Array.from(document.querySelectorAll(".tierlistDivTitle"));
  tierlistDivTitleInput = Array.from(
    document.querySelectorAll(".tierlistDivTitleInput")
  );
  pickerColor = Array.from(document.querySelectorAll(".pickerColor"));
  arrowUp = Array.from(document.querySelectorAll(".arrowUp"));
  arrowDown = Array.from(document.querySelectorAll(".arrowDown"));
}
