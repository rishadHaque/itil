const name = document.getElementById("name")
const email = document.getElementById("email")
const phone = document.getElementById("phone")
const address = document.getElementById("address")
const icomment = document.getElementById("icomment")
const form = document.getElementById("form")


form.addEventListener('submit', (e) => {

    let messages = []
    if (name.value === '' || name.value == null) {
        messages.push('Enter a valid name')
    }

    if (email.value === '' || email.value == null) {
        messages.push('Enter a valid email')
    }

    if (phone.value.length <= 11) {
        messages.push('Enter a valid phone number')
    }

    if (address.value === '' || address.value == null) {
        messages.push("Enter a valid address");
    }

    if (icomment.value === '' || icomment.value == null) {
        messages.push("Enter your valid designation")
    }



    if (messages.length > 0) {
        e.preventDefault()
        name.value = messages[0]
        name.style.color = "red"
        email.value = messages[1]
        email.style.color = "red"
        phone.value = messages[2]
        phone.style.color = "red"
        address.value = messages[3]
        address.style.color = "red"
        icomment.value = messages[4]
        icomment.style.color = "red"


    }

})