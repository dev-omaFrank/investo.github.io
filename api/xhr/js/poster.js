class SendData {
    constructor(form, url, method, isValid) {
        this.form = document.querySelector(form);
        this.url = url;
        this.method = method;
        this.isValid = isValid; 
        if (!this.form) {
            console.error('Form not found:', form);
            return;
        }
    }

    submitMethod() {
        if (this.form) {
            this.form.addEventListener('submit', async (e) => { 
                e.preventDefault();
                console.log('Form submitted');
                
                // First, check if the form is valid
                console.log("Is form valid?", this.isValid); // Debugging line

                if (this.isValid) { 
                    try {
                        const formData = new FormData(this.form);
                        const response = await fetch(this.url, {
                            method: this.method,
                            body: formData
                        });

                        console.log("Server response status:", response.status); // Log response status

                        if (!response.ok) {
                            throw new Error(`HTTP error! Status: ${response.status}`);
                        }
                        const data = await response.json();
                        console.log("Server response data:", data); // Log the response data

                        if (data.status === false) {
                            Swal.fire({
                                title: "Error",
                                text: data.message,
                                icon: "error"
                            });
                        } else if (data.status === true) {
                            Swal.fire({
                                title: "Success",
                                text: data.message,
                                icon: "success"
                            });
                        }

                        if (data.url) {
                            window.location.href = data.url;
                        }
                    } catch (error) {
                        console.error('Fetch Error:', error);
                    }
                } else {
                    console.log("Form validation failed, not submitting.");
                }
            });
        } else {
            console.error('Form not found at the time of event binding');
        }
    }
}


document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('button').forEach(button => {
        button.addEventListener('click', () => {
            if (button.value === 'Register') {
                let isValid = signup_checkform(); // Assuming this function returns a boolean
                console.log("Is register form valid?", isValid); // Debugging line
                const register = new SendData('form.auth-form', 'api/route/signup.php', 'POST', isValid);
                register.submitMethod();
            }
            if (button.value === 'Login') {
                let isValid = true; // Assuming this function returns a boolean
                console.log("Is login form valid?", isValid); // Debugging line
                const login = new SendData('form.auth-form', 'api/route/login.php', 'POST', isValid);
                login.submitMethod();
            }
            if (button.value === 'Spend') {
                const spend = new SendData('form.spendform', 'api/route/deposit.php', 'POST', true); 
                spend.submitMethod();
            }
        })
    });
});
