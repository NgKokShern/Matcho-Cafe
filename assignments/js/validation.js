function validation(){
	const form = document.getElementById('form');
	const username = document.getElementById('username');
	const email = document.getElementById('email');
	const phone = document.getElementById('phone');
	const date = document.getElementById('date');


	form.addEventListener('submit', e => {
		e.preventDefault();
		
		// trim to remove the whitespaces
		const usernameValue = username.value.trim();
		const emailValue = email.value.trim();
		const phoneValue = phone.value.trim();
		const dateValue = date.value.trim();
		
		
		if(usernameValue === '') {
			setErrorFor(username, 'Username cannot be blank');
		} 
		else {
			setSuccessFor(username);
		}
		
		if(emailValue === '') {
			setErrorFor(email, 'Email cannot be blank');
		} 
		else if (!isEmail(emailValue)) {
			setErrorFor(email, 'Not a valid email');
		} 
		else {
			setSuccessFor(email);
		}
		
		if(phoneValue === ''){
			setErrorFor(phone, 'Phone number cannot be blank');
		}
		else if (!isPhoneNumber(phoneValue)) {
			setErrorFor(phone, 'Not a valid phone number');
		}
		else {
			setSuccessFor(phone);
		}
		
		if(dateValue === '') {
			setErrorFor(date, 'Date cannot be blank');
		} 
		else {
			setSuccessFor(date);
		}
			
	});
}	

function setErrorFor(input, message) {
	const formGroup = input.parentElement;
	const small = formGroup.querySelector('small');
	formGroup.className = 'form-group error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formGroup = input.parentElement;
	formGroup.className = 'form-group success';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function isPhoneNumber(phone){
	return /^(\+?6?01)[0|1|2|3|4|6|7|8|9]\-*[0-9]{7,8}$/.test(phone);
}
	

