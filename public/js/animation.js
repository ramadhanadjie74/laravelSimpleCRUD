gsap.registerPlugin(ScrollTrigger);
    gsap.from(".transition", {
        scrollTrigger:{
            trigger:'.transition',
            start: "top bottom"
        },
        y: 50,
        opacity: 0,
        duration: 2,
        stagger: .3
    })