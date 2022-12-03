require('./bootstrap');

const createToDo = document.querySelector('#createToDo');
const createProgress = document.querySelector('#createProgress');
const createFinished = document.querySelector('#createFinished');
const toBox = document.querySelector('.toDo');
const toProgress = document.querySelector('.inProgress');
const toFinished = document.querySelector('.Finished');
for (let [key, value] of Object.entries(sessionStorage)) {
    switch (`${key}`){
        case "box":
            toBox.innerHTML = `${value}`;
            break;
        case "prog":
            toProgress.innerHTML = `${value}`;
            break;
        case "finish":
            toFinished.innerHTML = `${value}`;
            break;
        default:
            toFinished.innerHTML = "brak";
            toProgress.innerHTML = "brak";
            toBox.innerHTML = "brak";
    }

}
function addItemTOBOX() {
    let toDoPrompt = prompt('Please enter a Name and Description of the task ', ' ');
    if (toDoPrompt != null) {
        const newDiv = document.createElement('div');
        newDiv.classList.add('toBox');
        newDiv.textContent = toDoPrompt;
        const storage = toBox.appendChild(newDiv);
        const newOld =  sessionStorage.getItem('box') + storage.outerHTML;
       sessionStorage.setItem('box', newOld) ;

    }

}
function addItemProgress(){
    let toDoPrompt = prompt('Please enter a Name and Description of the task ', ' ');
    if (toDoPrompt != null) {
        const newDiv = document.createElement('div');
        newDiv.classList.add('toBox');
        newDiv.textContent = toDoPrompt;
        const storage = toProgress.appendChild(newDiv);
        const newOld =  sessionStorage.getItem('prog') + storage.outerHTML;
        sessionStorage.setItem('prog', newOld) ;
    }
}
function addItemFinished(){
    let toDoPrompt = prompt('Please enter a Name and Description of the task ', ' ');
    if (toDoPrompt != null) {
        const newDiv = document.createElement('div');
        newDiv.classList.add('toBox');
        newDiv.textContent = toDoPrompt;
        const storage = toFinished.appendChild(newDiv);
        const newOld =  sessionStorage.getItem('finish') + storage.outerHTML;
        sessionStorage.setItem('finish', newOld);
    }

}
createToDo?.addEventListener('click', () => {
    addItemTOBOX();
});

createProgress?.addEventListener('click', () => {
    addItemProgress();
});

createFinished?.addEventListener('click', () => {
    addItemFinished();
});

Object.entries(sessionStorage).forEach((el ) => {
    console.log(el);
})

