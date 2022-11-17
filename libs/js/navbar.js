// N A V B A R   S C R I P T


var menuOpened = false
var menuOpening = false

window.addEventListener("resize", () => {

    menuOpened = false
    document.getElementById("menu").style.transition = 'none'

    document.getElementById("bar-one").style.transform = 'translateY(0)'
    document.getElementById("bar-two").style.opacity = '1'
    document.getElementById("bar-three").style.transform = 'translateY(0)'
    
    if(window.innerWidth <= 1160)
    {
        document.getElementById("menu").style.left = '-100%'
    }else
    {
        document.getElementById("menu").style.left = 0
    }
})

document.getElementById("burger-container").addEventListener('click', () => {

    if(menuOpening)
    {
        return
    }

    menuOpening = true

    if(menuOpened)
    {
        document.getElementById("menu").style.transition = 'all .3s linear'

        document.getElementById("bar-one").style.transform = 'translateY(22px) translateX(0) rotate(0)'
        document.getElementById("bar-three").style.transform = 'translateY(-20px) translateX(0) rotate(0)'

        setTimeout(() => {
            document.getElementById("menu").style.left = '-100%'

            document.getElementById("bar-one").style.transform = 'translateY(0) rotate(0)'
            document.getElementById("bar-two").style.opacity = '1'
            document.getElementById("bar-three").style.transform = 'translateY(0) rotate(0)'

            setTimeout(() => {
                document.getElementById("menu").style.transition = 'none'
                menuOpening = false
            }, 300)
        }, 300)
        
        menuOpened = false
    }else
    {
        document.getElementById("menu").style.transition = 'all .3s linear'

        document.getElementById("bar-one").style.transform = 'translateY(30px) rotate(0)'
        document.getElementById("bar-two").style.opacity = '0'
        document.getElementById("bar-three").style.transform = 'translateY(-30px) rotate(0)'

        setTimeout(() => {
            document.getElementById("menu").style.left = 0

            document.getElementById("bar-one").style.transform = 'translateY(22px) translateX(22px) rotate(-45deg)'
            document.getElementById("bar-three").style.transform = 'translateY(-20px) translateX(22px) rotate(45deg)'

            setTimeout(() => {
                document.getElementById("menu").style.transition = 'none'
                menuOpening = false
            }, 300)
        }, 300)

        menuOpened = true
    }

})

document.getElementById("menu").addEventListener('click', () => {

    if(window.innerWidth > 1160)
    {
        return
    }

    menuOpening = true

    document.getElementById("menu").style.transition = 'all .3s linear'

    document.getElementById("bar-one").style.transform = 'translateY(22px) translateX(0) rotate(0)'
    document.getElementById("bar-three").style.transform = 'translateY(-20px) translateX(0) rotate(0)'

    setTimeout(() => {
        document.getElementById("menu").style.left = '-100%'

        document.getElementById("bar-one").style.transform = 'translateY(0) rotate(0)'
        document.getElementById("bar-two").style.opacity = '1'
        document.getElementById("bar-three").style.transform = 'translateY(0) rotate(0)'

        setTimeout(() => {
            document.getElementById("menu").style.transition = 'none'
            menuOpening = false
        }, 300)
    }, 300)
    
    menuOpened = false

})