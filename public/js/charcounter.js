const textarea = document.getElementById('text');
const aantalchars = document.querySelector('#aantalchars');
const CHAR_LIMIT = 500;

// window.addEventListener('DOMContentLoaded', e => {
//     let textareastring = textarea.value;
//     aantalchars.innerHTML = `Aantal characters ${textareastring.length} / 500`;
// });

console.log(textarea);

textarea.addEventListener('input', e => {
    let textareastring = textarea.value.replace(/[\n]|[ ]/g, "");
    textareastring.length >= CHAR_LIMIT ? aantalchars.style = "color: red;" : aantalchars.style = "";
    aantalchars.innerHTML = `Aantal characters ${textareastring.length} / 500`;
});