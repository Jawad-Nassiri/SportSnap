const addSetBtn = document.getElementById('addSet')
const setGroupContainer = document.querySelector('.set-group-container')
const successMessage = document.querySelector('.success')
let counter = 3

addSetBtn.onclick = () => {
    let setGroupElement = document.createElement('div');
    setGroupElement.className = 'set-group';
    
    setGroupElement.innerHTML =
    `
    <span>Set ${++counter}:</span>
    <input type="number" name="weight" min="1" step="0.5" placeholder="Weight (kg)" required>
    <input type="number" name="reps" min="1" placeholder="Reps" required>
    
    `;
    if(setGroupElement) {
        successMessage.style.display = 'block';
    }

    setTimeout(() => {
        successMessage.style.display = 'none';
    }, 2000)
    setGroupContainer.append(setGroupElement);
}


document.querySelector('button[type="submit"]').onclick = (evt) => {
    evt.preventDefault()
    let inputExerciseValue = document.querySelector('input[name="exercise"]').value
    // console.log(inputExerciseValue)

    if(inputExerciseValue.toLowerCase() === "back") {
        document.querySelector('form').action = 'back.php'
        console.log(document.querySelector('form').action)
    }
}