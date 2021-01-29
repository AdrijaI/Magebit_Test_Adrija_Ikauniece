


function validation() {
    const text = document.getElementById('text');
    const submit = document.getElementById('submit');
    const form = document.getElementById('form');
    const email = document.getElementById('input-field').value;
    const pattern = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;


    if (!email) {
        form.classList.add('invalid');
        form.classList.remove('valid');
        text.innerHTML = 'E-mail address is required';
        text.style.color = '#FF0000';
        submit.disabled = true;
        submit.style.color = 'hsla(218.6, 26.9%, 10.2%, 0.3)';

    } else if (email.match(pattern)) {
        form.classList.add('valid');
        form.classList.remove('invalid');
        text.innerHTML = '';
        submit.disabled = false;
        submit.style.color = '#4066A5';

    } else if (!email.match(pattern)) {
        form.classList.remove('valid');
        form.classList.add('invalid');
        text.innerHTML = 'Please provide a valid e-mail address';
        text.style.color = '#FF0000';
        submit.disabled = true;
        submit.style.color = 'hsla(218.6, 26.9%, 10.2%, 0.3)';

    } else if (email.includes('.co')) {
        form.classList.remove('valid');
        form.classList.add('invalid');
        text.innerHTML = 'We are not accepting subscriptions from Colombia emails';
        text.style.color = '#FF0000';
        submit.disabled = true;
        submit.style.color = 'hsla(218.6, 26.9%, 10.2%, 0.3)';
    }
    
    
};


function checkboxValidation() {
    const text = document.getElementById('text');
    const submit = document.getElementById('submit');
    const form = document.getElementById('form');
    const checkbox = document.getElementById('checkbox');

    if (checkbox.checked === false) {
        form.classList.add('invalid');
        form.classList.remove('valid');
        text.innerHTML = 'You must accept the terms and conditions';
        text.style.color = '#FF0000';
        submit.disabled = true;
        submit.style.color = 'hsla(218.6, 26.9%, 10.2%, 0.3)';
        

    } else if (checkbox.checked === true) {
        form.classList.remove('invalid');
        form.classList.add('valid');
        checkbox.classList.add('checked');
        text.innerHTML = '';
        submit.disabled = false;
        submit.style.color = '#4066A5';
        
    }
}; 

