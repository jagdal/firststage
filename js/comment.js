const inputBox = document.getElementById("input-box");
const inputComment = document.getElementById("input-comment");
const listContainer = document.getElementById("list-container");
function addComment(){
    if(inputBox.value!= ""){
        let newName = document.createElement('li');
        newName.innerHTML = inputBox.value;
        listContainer.appendChild(newName);
    }
    else if(inputComment.value!= ""){
        let newComment = document.createElement('li');
        newComment.innerHTML = inputComment.value;
        listContainer.appendChild(newComment);
    }

    else{
        alert("Please enter a name");
    }

    

}
