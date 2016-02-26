function validateForm() {
	var msg="";

	msg  = validateFname(form.fname.value)
	msg	+= validateLname(form.lname.value)
	msg	+= validateMi(form.mi.value)
	msg += validateMonth(form.month.value)
	msg += validateDay(form.days.value)
	msg += validateYear(form.year.value)
	msg += validateTelNo(form.telno.value)
	msg += validateCelNo(form.celno.value)
	msg += validateEmail(fomr.email.value)
	msg	+= validateAdd(form.address.value)
	msg += validateUsername(form.username.value)
	msg += validatePass1(form.pass1.value)
	msg += validatePass2(form.pass2.value)
}

function validateFname(v) {
	if(v === "" || v==
}