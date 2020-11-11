const inputField = document.querySelector('.chosen-value');
const inputField_hidden = document.querySelector('.chosen-value2');
const dropdown = document.querySelector('.value-list');
const dropdownArray = [...document.querySelectorAll('li')];

var username_login = document.getElementById('username_login').value;
var pw_login = document.getElementById('pw_login');
var chosen_hidden = document.getElementById('chosen-value2').value;

console.log(typeof dropdownArray);

let valueArray = [];
dropdownArray.forEach(item => {
    valueArray.push(item.textContent);
});

const closeDropdown = () => {
    dropdown.classList.remove('open');
};

inputField.addEventListener('input', () => {
    dropdown.classList.add('open');
    let inputValue = inputField.value.toLowerCase();
    let valueSubstring;
    if (inputValue.length > 0) {
        for (let j = 0; j < valueArray.length; j++) {
            if (!(inputValue.substring(0, inputValue.length) === valueArray[j].substring(0, inputValue.length).toLowerCase())) {
                dropdownArray[j].classList.add('closed');
            } else {
                dropdownArray[j].classList.remove('closed');
            }
        }
    } else {
        for (let i = 0; i < dropdownArray.length; i++) {
            dropdownArray[i].classList.remove('closed');
        }
    }
});

dropdownArray.forEach(item => {
    item.addEventListener('click', evt => {
        inputField.value = item.textContent;

        var sd = item.textContent;
        var num_emp1 = sd.match(/\| [\d\.]+ \-/g);
        var num_emp2 = num_emp1.toString();

        var num_emp3 = num_emp2.match(/[\d\.]+/g);
        var num_emp = num_emp3.toString();

        inputField_hidden.value = num_emp;

        $("#pw_login").prop('disabled', false);

        dropdownArray.forEach(dropdown => {
            dropdown.classList.add('closed');
        });
    });
    item.addEventListener('mousedown', evt => {
        inputField.value = item.textContent;

        var sd = item.textContent;
        var num_emp1 = sd.match(/\| [\d\.]+ \-/g);
        var num_emp2 = num_emp1.toString();

        var num_emp3 = num_emp2.match(/[\d\.]+/g);
        var num_emp = num_emp3.toString();

        inputField_hidden.value = num_emp;

        $("#pw_login").prop('disabled', false);

        dropdownArray.forEach(dropdown => {
            dropdown.classList.add('closed');
        });
    });
});

inputField.addEventListener('focus', () => {
    inputField.placeholder = 'Type to filter';
    dropdown.classList.add('open');
    dropdownArray.forEach(dropdown => {
        dropdown.classList.remove('closed');
    });
});

inputField.addEventListener('blur', () => {
    inputField.placeholder = 'Select an Account';
    dropdown.classList.remove('open');
});

document.addEventListener('click', evt => {
    const isDropdown = dropdown.contains(evt.target);
    const isInput = inputField.contains(evt.target);
    if (!isDropdown && !isInput) {
        dropdown.classList.remove('open');
    }
});

document.addEventListener('mousedown', evt => {
    const isDropdown = dropdown.contains(evt.target);
    const isInput = inputField.contains(evt.target);
    if (!isDropdown && !isInput) {
        dropdown.classList.remove('open');
    }
});