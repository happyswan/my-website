// L I N K S   T R A N S I T I O N   S C R I P T


window.addEventListener("load", () => {

    const links = document.getElementsByTagName('a')

    for(let i = 0; i < links.length; i++)
    {
        if(!links[i].href.toLowerCase().includes("tel") || !links[i].href.toLowerCase().includes("mailto"))
        {
            links[i].addEventListener("click", (event) => {
                if(links[i].target !== undefined && links[i].target !== null && (links[i].target == "_blank" || links[i].href.includes('#')))
                {
                    return
                }

                event.preventDefault()

                document.body.style.opacity = 0

                setTimeout(() => {
                    window.location = links[i].href
                }, 300)
            })
        }
    }

    document.body.style.opacity = 1;
})