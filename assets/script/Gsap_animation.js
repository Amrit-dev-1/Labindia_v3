document.addEventListener("DOMContentLoaded", function () {
	// Initialize GSAP and ScrollTrigger
	gsap.registerPlugin(ScrollTrigger);

	// Create the horizontal scroll animation
	const sections = gsap.utils.toArray(".panel");
	gsap.to(sections, {
		xPercent: -100 * (sections.length - 1),
		ease: "none",
		scrollTrigger: {
			trigger: ".custom-container",
			pin: true,
			scrub: 1,
			snap: 1 / (sections.length - 1),
			end: () => "+=" + document.querySelector(".custom-container").offsetWidth * (sections.length - 1)
		},
	});


});


// document.addEventListener("DOMContentLoaded", function () {

//     gsap.registerPlugin(ScrollTrigger);


//     const sections = gsap.utils.toArray(".panel");
//     gsap.to(sections, {
//         xPercent: -100 * (sections.length - 1),
//         ease: "none",
//         scrollTrigger: {
//             trigger: ".custom-container",
//             pin: true,
//             scrub: 1,
//             // snap: 1 / (sections.length - 1),    
//             end: () => "+=" + document.querySelector(".custom-container").offsetWidth * (sections.length - 1)
//         },
//     });

// });

// document.addEventListener("DOMContentLoaded", function () {
//     gsap.registerPlugin(ScrollTrigger);

//     const panels = gsap.utils.toArray(".panel");
//     const container = document.querySelector(".custom-container");
//     const containerWidth = container.offsetWidth * (panels.length - 1);

//     console.log("Panels:", panels);
//     console.log("Container Width:", containerWidth);

//     // Main panel animation
//     gsap.to(panels, {
//         xPercent: -100 * (panels.length - 1),
//         ease: "power1.inOut",
//         scrollTrigger: {
//             trigger: container,
//             pin: true,
//             scrub: 1.5,  // Adjust this value to make the scroll smoother
//             end: () => "+=" + containerWidth
//         },
//     });

//     // Motion classes with different speeds
//     const motionElements = [
//         { selector: ".motion-1", speed: 0.8 },
//         { selector: ".motion-2", speed: 0.6 },
//         { selector: ".motion-3", speed: 0.4 },
//         { selector: ".motion-4", speed: 0.2 },
//         { selector: ".motion-5", speed: 0.1 },
//         { selector: ".motion-6", speed: 0.9 },
//         { selector: ".motion-7", speed: 0.7 },
//         { selector: ".motion-8", speed: 0.5 },
//         { selector: ".motion-9", speed: 0.3 },
//         { selector: ".motion-10", speed: 0.05 } // Fastest
//     ];

//     motionElements.forEach(motionElement => {
//         const elements = gsap.utils.toArray(motionElement.selector);
//         elements.forEach(element => {
//             gsap.to(element, {
//                 xPercent: -100 * (panels.length - 1) * motionElement.speed,
//                 ease: "power1.inOut",  // Smooth easing function
//                 scrollTrigger: {
//                     trigger: container,
//                     start: "top top",
//                     end: () => "+=" + containerWidth,
//                     scrub: 1.5,  // Adjust this value to make the scroll smoother
//                     markers: false // Set to true if you want to see the markers for debugging
//                 },
//             });
//         });
//     });

//     // Default scroll animation for elements without motion classes
//     gsap.to(".panel > *:not(.motion-1):not(.motion-2):not(.motion-3):not(.motion-4):not(.motion-5):not(.motion-6):not(.motion-7):not(.motion-8):not(.motion-9):not(.motion-10)", {
//         xPercent: -100 * (panels.length - 1),
//         ease: "power1.inOut",
//         scrollTrigger: {
//             trigger: container,
//             start: "top top",
//             end: () => "+=" + containerWidth,
//             scrub: 1.5,
//             markers: false
//         },
//     });
// });





