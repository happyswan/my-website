// S E N D   E M A I L   S C R I P T


// Fix input onchange function
function checkFixInput(id, fixPlaceholder)
{
    let input = document.getElementById(id)

    if(input.value == null || input.value == undefined || input.value == "")
    {
        emailInputError(id, 'To pole nie może pozostać puste!')
        return
    }

    if(id == "email" && !checkEmail(id, input.value))
    {
        return
    }

    input.classList.remove("red-border")
    input.placeholder = fixPlaceholder
}

// Display an error function
function emailInputError(id, msg)
{
    let input = document.getElementById(id)
    input.classList.add("red-border")
    input.placeholder = msg
}

// Check email function
function checkEmail(id, email)
{
    if(typeof email !== 'string')
    {
        emailInputError(id, 'Podano błędny adres e-mail!')
        document.getElementById(id).value = ''
        return
    }

    if(!email.includes("@"))
    {
        emailInputError(id, 'Podano błędny adres e-mail!')
        document.getElementById(id).value = ''
        return
    }

    let emailSplitted = email.split("@")

    if(emailSplitted.length != 2)
    {
        emailInputError(id, 'Podano błędny adres e-mail!')
        document.getElementById(id).value = ''
        return
    }
    
    if(
        emailSplitted[0] == ""
            ||
        emailSplitted[0] == null
            ||
        emailSplitted[0] == undefined
    )
    {
        emailInputError(id, 'Podano błędny adres e-mail!')
        document.getElementById(id).value = ''
        return
    }

    emailSplitted = emailSplitted[1].split(".")

    if(emailSplitted.length < 2)
    {
        emailInputError(id, 'Podano błędny adres e-mail!')
        document.getElementById(id).value = ''
        return
    }

    let error = false

    emailSplitted.forEach(partOfEmail => {
        if(
            partOfEmail == ""
                ||
            partOfEmail == null
                ||
            partOfEmail == undefined
        )
        {
            emailInputError(id, 'Podano błędny adres e-mail!')
            document.getElementById(id).value = ''
            error = true
            return
        }
    })

    if(error)
    {
        return
    }

    return true
}

// Send email function
async function sendEmail()
{
    // Initialize and check data
    let fields = [
        'fullname',
        'email',
        'title',
        'message'
    ]

    let data = {}

    fields.forEach(field => {
        let value = document.getElementById(field).value

        if(value == null || value == undefined || value == "")
        {
            emailInputError(field, 'To pole nie może pozostać puste!')
            return
        }

        data[field] = value
    });

    if(Object.keys(data).length != fields.length)
    {
        return
    }

    if(!checkEmail("email", data["email"]))
    {
        return
    }


    // Get send button, display message and disable click
    let button = document.getElementById("send_email-btn")
    button.disabled = true
    button.style.cursor = "initial"
    button.style.filter = "grayscale(1)"
    button.innerText = "Wysyłanie..."


    // Send e-mail
    await ajax('POST', appUrl + "api/sendEmail", [
        ['fullname', data["fullname"]],
        ['email', data["email"]],
        ['title', data["title"]],
        ['message', data["message"]],
    ], (xhr) => {

        let res = JSON.parse(xhr.responseText)

        let button = document.getElementById("send_email-btn")
        button.disabled = true
        button.style.cursor = "initial"
        button.style.filter = "grayscale(0)"
        button.innerText = res.msg
        
        if(!res.success)
        {
            return
        }

        button.style.background = 'var(--color-primary)'
    })
}