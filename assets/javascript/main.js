
function Validator(option) {
    function validate(inputElement, rule) {
        inputElement.onblur = function() {
            var errorMessage = rule.test(inputElement.value);
            var errorElement = inputElement.parentElement.querySelector(option.errorSelector);
            if(errorMessage) {  
                errorElement.innerText = errorMessage;
                inputElement.parentElement.classList.add('invalid');
            } 
        }
        inputElement.oninput = function() {
            var errorElement = inputElement.parentElement.querySelector(option.errorSelector);
            errorElement.innerText = '';
            inputElement.parentElement.classList.remove('invalid');
        }
    }

    var formElement = document.querySelector(option.form);
    if(formElement){
        option.rules.forEach(rule => {
            var inputElement = formElement.querySelector(rule.selector);
            if(inputElement) {
               validate(inputElement, rule);
            }
        });
    }
}

getConfirmValue = function() {
    return document.querySelector('#form-reg #passwordReg').value;
}

Validator.isRequired = function(selector, message = 'Vui lòng nhập họ tên') {
    return {
        selector,
        test(value) {
            return value.trim() ? undefined : message;
        }
    }
}

Validator.isEmail = function(selector, message = 'Vui lòng nhập Email vào trường này') {
     return {
        selector,
        test(value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined :  message;
        }
    }
}

Validator.isPwd = function(selector, min_length, message = 'Mật khẩu chứa ít nhất 6 kí tự') {
    return {
       selector,
       test(value) {
           var pass = value;
           return value.length > min_length ? undefined : message;
       }
   }
}
Validator.isRePwd = function(selector, getConfirmValue, message = 'Giá trị nhập vào không chính xác') {
    return {
       selector,
       test(value) {
           return getConfirmValue() == '' || (value == getConfirmValue()) ? (getConfirmValue() == '' ? 'Vui lòng nhập mật khẩu' : undefined) : message;
       }
   }
}



