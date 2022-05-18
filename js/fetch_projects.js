const projects = [
    {
        id: 1,
        name: "Project 1",
        image: 'img/bouw/project4.jpg'
    },
    {
        id: 2,
        name: "Project 2",
        image: 'img/bouw/project1.jpg'
    },
    {
        id: 3,
        name: "Project 3",
        image: 'img/bouw/project2.jpg'
    },
    {
        id: 4,
        name: "Project 4",
        image: 'img/bouw/project3.jpg'
    },
    {
        id: 5,
        name: "Project 5",
        image: 'img/bouw/project4.jpg'
    },
    {
        id: 6,
        name: "Project 6",
        image: 'img/bouw/project1.jpg'
    },
    {
        id: 7,
        name: "Project 7",
        image: 'img/bouw/project2.jpg'
    },
    {
        id: 8,
        name: "Project 8",
        image: 'img/bouw/project3.jpg'
    },
    {
        id: 9,
        name: "Project 9",
        image: 'img/bouw/project4.jpg'
    },
    {
        id: 10,
        name: "Project 10",
        image: 'img/bouw/project1.jpg'
    },
]


// window.addEventListener("load", function() {

    
    const aosDelay = [10, 300, 600, 10, 300, 600];

    for(let i = 0; i < 6; i++) {
        console.log(projects[i]);
        

        var image = new Image();
        image.src = projects[i].image;
        var container = document.getElementsByClassName("projects-gallery")[0];
        image.onload = function() {
            
            container.innerHTML += `<div class="projects-grid-item-1" data-aos="fade-up" data-aos-delay="${aosDelay[i]}"><img data-tilt src="${projects[i].image}" alt="project photo"><p>${projects[i].name}</p></div>`;
            
        };
        
    }

// });

