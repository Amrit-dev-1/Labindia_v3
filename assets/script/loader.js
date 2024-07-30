// preloader script start

window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    const video = preloader.querySelector('video');
    video.onended = () => {
        preloader.style.transition = 'opacity 0.5s ease';
        preloader.style.opacity = '0';
        setTimeout(() => {
            preloader.style.display = 'none';
        }, 500);
    };
});

// preloader script end


// cursor movement start

var mouse = { x: 0, y: 0 };
var dotPos = { x: 0, y: 0 };
var ballPos = { x: 0, y: 0 };
var dotRatio = 0.2;
var ballRatio = 0.1;
var dot = document.getElementById("dot");
var ball = document.getElementById("ball");
var isMouseMoving = false;
var idleTimer;
var ballAnimation;

// Set initial position for dot and ball
gsap.set(dot, { xPercent: -50, yPercent: -50 });
gsap.set(ball, { xPercent: -50, yPercent: -50 });

// Mouse movement detection function
document.addEventListener("mousemove", (e) => {
    mouse.x = e.clientX; // Use clientX for viewport-relative position
    mouse.y = e.clientY; // Use clientY for viewport-relative position
    isMouseMoving = true;
    clearTimeout(idleTimer);
    idleTimer = setTimeout(() => {
        isMouseMoving = false;
    }, 2000);
});

gsap.ticker.add(() => {
    dotPos.x += (mouse.x - dotPos.x) * dotRatio;
    dotPos.y += (mouse.y - dotPos.y) * dotRatio;
    gsap.set(dot, { x: dotPos.x, y: dotPos.y });

    ballPos.x += (dotPos.x - ballPos.x) * ballRatio;
    ballPos.y += (dotPos.y - ballPos.y) * ballRatio;
    gsap.set(ball, { x: ballPos.x, y: ballPos.y });

    if (!isMouseMoving && !ballAnimation) {
        ballAnimation = gsap
            .timeline({ repeat: -1, yoyo: true, ease: "power1.inOut" })
            .to(ball, { scale: 1.2, duration: 0.75 });
    } else if (isMouseMoving && ballAnimation) {
        ballAnimation.kill();
        ballAnimation = null;
        gsap.to(ball, { scale: 1, duration: 0.75, ease: "power1.inOut" });
    }
});

// cursor movement end