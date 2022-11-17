// C A N V A S   F L U I D   S C R I P T


// Init canvas - get element and context
const canvas = document.getElementById('fluid');
const ctx = canvas.getContext('2d');

// Set rem size in pixels
var rem = parseFloat(getComputedStyle(document.documentElement).fontSize);

// Init mandatory arrays
const particleArray = [];
const numberOfParticles = 120;

const buttons = [];

var animationPlaying = false

// Class of single button
class Button {
    constructor(x, y, width, height) {
        this.x = x;
        this.y = y;
        this.width = width;
        this.height = height;
        this.baseX = x;
    }

    update() {
        this.x = (canvas.width / 2);
        this.width = (((canvas.width / 2) - (.15 * canvas.width)) / 2);
    }
}

// Create buttons function
function createButtons() {
    let x = (canvas.width / 2);
    let y = canvas.height / 2 + (8.2 * rem);
    let width = (((canvas.width / 2) - (.15 * canvas.width)) / 2);
    let height = 3 * rem;
    buttons.push(new Button(x, y, width, height));
}


// Particles (water drops) class
class Particle {
    constructor(x, y, size, weight) {
        this.x = x;
        this.y = y;
        this.size = size;
        this.weight = weight;
    }

    resize()
    {
        this.x = (canvas.width - (.15 * canvas.width) - (canvas.width / 4));
    }

    update() {
        // if (this.x > mouse.x - 50 &&
        //     this.x < mouse.x + 50 &&
        //     this.y > mouse.y - 5 &&
        //     this.y < mouse.y + 5) {

        //     this.y += this.weight;
        // }

        for (let i = 0; i < buttons.length; i++) {
            if (this.x < buttons[i].x + buttons[i].width &&
                this.x > buttons[i].x &&
                this.y < buttons[i].y + buttons[i].height &&
                this.y > buttons[i].y) {

                this.weight = 0;

                this.x += 1.2;

            } else {
                this.weight += 0.02;
            }
        }

        if (this.y > canvas.height) {
            this.y = 0 - this.size;
            this.x = (Math.random() * 60) + (canvas.width - (.15 * canvas.width) - (canvas.width / 4));
            this.weight = (Math.random() * 0.01);
        }

        this.y += this.weight;
    }

    draw() {
        ctx.fillStyle = 'rgb(153, 192, 218)';
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.fill();
    }
}

// Create particles function
function createParticles() {
    for (let i = 0; i < numberOfParticles; i++) {
        const x = (Math.random() * 60) + (canvas.width - (.15 * canvas.width) - (canvas.width / 4));
        const y = (Math.random() * canvas.height);
        const size = (Math.random() * 20) + 10;
        const weight = (Math.random() * 0.01);
        particleArray.push(new Particle(x, y, size, weight));
    }
}


// Handle animation
function animate() {

    if(window.scrollY > 41 * rem)
    {
        animationPlaying = false
        return
    }

    ctx.clearRect(0, 0, canvas.width, canvas.height);

    for (let i = 0; i < particleArray.length; i++) {
        particleArray[i].update();
        particleArray[i].draw();
    }

    requestAnimationFrame(animate);
}


// Init and start animation when page is loaded
window.addEventListener("load", () => {

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    createButtons();
    createParticles();

    animationPlaying = true
    animate()
});


// Fix window resize canvas bugs
window.addEventListener('resize', (e) => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    for(let i = 0; i < buttons.length; i++)
    {
        buttons[i].update();
    }

    for(let i = 0; i < particleArray.length; i++)
    {
        particleArray[i].resize();
    }
});


// Accelerate fluid animation on scroll
window.addEventListener('scroll', () => {
    if(window.scrollY < 41 * rem && !animationPlaying)
    {
        animationPlaying = true
        animate()
    }
});