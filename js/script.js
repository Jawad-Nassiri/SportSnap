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
    <input type="number" name="reps" min="1" placeholder="Reps" required>
    <input type="number" name="weight" min="1" step="0.5" placeholder="Weight (kg)" required>
    
    `;
    if(setGroupElement) {
        successMessage.style.display = 'block';
    }

    setTimeout(() => {
        successMessage.style.display = 'none';
    }, 2000)
    setGroupContainer.append(setGroupElement);
}