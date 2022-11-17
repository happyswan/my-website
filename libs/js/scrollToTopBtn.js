// S C R O L L   T O   T O P   B U T T O N   S C R I P T

function scrollToTop()
{
    window.scrollTo(0,0);
}

window.addEventListener("load", () => {

    if(window.scrollY > 0)
    {
        document.getElementById('scroll_to_top-btn').style.cursor = 'pointer';
        document.getElementById('scroll_to_top-btn').style.opacity = 1;
    }
});

window.addEventListener("scroll", () => {
    if(window.scrollY == 0)
    {
        document.getElementById('scroll_to_top-btn').style.cursor = 'inherit';
        document.getElementById('scroll_to_top-btn').style.opacity = 0;
        return
    }

    document.getElementById('scroll_to_top-btn').style.cursor = 'pointer';
    document.getElementById('scroll_to_top-btn').style.opacity = 1;
});