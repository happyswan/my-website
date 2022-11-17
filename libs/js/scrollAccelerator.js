// S C R O L L   S E C T I O N   U R L   S C R I P T


const scrollSections = document.getElementsByTagName('section')
const boxContainers = document.getElementsByClassName('box-container')
const cavases = document.getElementsByTagName('canvas')

function setDisplay(collection)
{
    for(let i = 0; i < collection.length; i++)
    {
        // collection[i].style.display = 'block';
        collection[i].style.visibility = 'visible';
    }
}

function setVisibility(collection)
{
    for(let i = 0; i < collection.length; i++)
    {
        // Accelerate page with visibility
        if(
            collection[i].getBoundingClientRect().y < window.innerHeight
            &&
            collection[i].getBoundingClientRect().y > -collection[i].offsetHeight
        )
        {
            collection[i].style.visibility = 'visible';
            collection[i].style.opacity = 1;
        }else
        {
            collection[i].style.visibility = 'hidden';
            collection[i].style.opacity = 0;
        }
    }
}

window.addEventListener("load", () => {

    setDisplay(scrollSections)
    setDisplay(boxContainers)
    setDisplay(cavases)

    setVisibility(scrollSections)
    setVisibility(boxContainers)
    setVisibility(cavases)

})


window.addEventListener("scroll", () => {

    setVisibility(scrollSections)
    setVisibility(boxContainers)
    setVisibility(cavases)

})