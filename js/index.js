window.sr = ScrollReveal();
const typed = new Typed(".typed", {
    strings: [
         
        'CSS', 
        'JavaScript',
        'C#',
        'Java',
        'WordPress',
        'HTML'
    ],
    typeSpeed: 80,
    startDelay: 4000,
    backSpeed: 80,
    backDelay: 1500,
    loop: true,
    loopCount: false
});



sr.reveal('.informacion-contenedor',{
    duration: 4000,
    origin: 'bottom',
    distance: '-50%',
})

sr.reveal('header', {
    duration: 1000,
    origin: 'bottom',
    distance: '-100px'
})

sr.reveal('.contenido_sobre',{
    duration: 3500, 
    origin: 'left',
    distance: "100%"
})
sr.reveal('.s1',{
    delay: 2000,
    duration: 2000, 
    origin: 'bottom',
    distance: "100%"
})
sr.reveal('.s2',{
    delay: 2500,
    duration: 2000, 
    origin: 'bottom',
    distance: "100%"
})
sr.reveal('.s3',{
    delay: 3000,
    duration: 2000, 
    origin: 'bottom',
    distance: "100%"
})
sr.reveal('.p1',{
    duration: 3000, 
    origin: 'left',
    distance: "20%"
})
sr.reveal('.p2',{
    delay: 1000,
    duration: 3000, 
    origin: 'bottom',
    distance: "10%"
})

sr.reveal('.contenedor_contacto',{
    delay: 1000,
    duration: 3000, 
    origin: 'bottom',
    distance: "10%"
})
sr.reveal('.i1',{
    delay: 1500,
    duration: 3000, 
    origin: 'bottom',
    distance: "100%"
})
sr.reveal('.i2',{
    delay: 2000,
    duration: 3000, 
    origin: 'bottom',
    distance: "100%"
})
sr.reveal('.i3',{
    delay: 2500,
    duration: 3000, 
    origin: 'bottom',
    distance: "100%"
})
sr.reveal('.i4',{
    delay: 3000,
    duration: 3000, 
    origin: 'bottom',
    distance: "100%"
})




