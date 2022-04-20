const projects = [
    {
        id: 8,
        name: "Arnhem",
        image: 'img/bouw/project1.jpg'
    },
    {
        id: 7,
        name: "project 2",
        image: 'img/bouw/project2.jpg'
    },
    {
        id: 6,
        name: "project 3",
        image: 'img/bouw/project3.jpg'
    },
    {
        id: 5,
        name: "project 4",
        image: 'img/bouw/project4.jpg'
    },
    {
        id: 4,
        name: "project 5",
        image: 'img/bouw/project1.jpg'
    },
    {
        id: 3,
        name: "project 6",
        image: 'img/bouw/project2.jpg'
    },
    {
        id: 2,
        name: "project 7",
        image: 'img/bouw/project3.jpg'
    },
    {
        id: 1,
        name: "project 8",
        image: 'img/bouw/project4.jpg'
    }
]

console.log(projects)

window.addEventListener("load", function() {


for(let i = 0; i < 6; i++) {
    // console.log(projects[i]);
    // console.log(projects[i].name);
    // console.log(projects[i].image);
    
    var image = new Image();
    image.src = projects[i].image;
    var div = document.getElementsByClassName("projects-gallery")[0];
    image.onload = function() {
        div.innerHTML += `<div class="projects-grid-item-1" data-aos="fade-up" data-aos-delay="10"><img data-tilt src="${projects[i].image}" alt=""><p>${projects[i].name}</p></div>`;


    };
    
}

// div.innerHTML += `<div class="projects-grid-item-1" data-aos="fade-up" data-aos-delay="10"><img data-tilt src="${projects[0].image}" alt=""><p>${projects[0].name}</p></div>`;
//         div.innerHTML += `<div class="projects-grid-item-1" data-aos="fade-up" data-aos-delay="10"><img data-tilt src="${projects[1].image}" alt=""><p>${projects[1].name}</p></div>`;
//         div.innerHTML += `<div class="projects-grid-item-1" data-aos="fade-up" data-aos-delay="10"><img data-tilt src="${projects[2].image}" alt=""><p>${projects[2].name}</p></div>`;
//         div.innerHTML += `<div class="projects-grid-item-1" data-aos="fade-up" data-aos-delay="10"><img data-tilt src="${projects[3].image}" alt=""><p>${projects[3].name}</p></div>`;
//         div.innerHTML += `<div class="projects-grid-item-1" data-aos="fade-up" data-aos-delay="10"><img data-tilt src="${projects[4].image}" alt=""><p>${projects[4].name}</p></div>`;
//         div.innerHTML += `<div class="projects-grid-item-1" data-aos="fade-up" data-aos-delay="10"><img data-tilt src="${projects[5].image}" alt=""><p>${projects[5].name}</p></div>`;

});



// import data from '../json/projects.json';
// const fetchProjects = () => {
//     data = [];
//     const projects = data.map((data) => ({
//         id: data.id,
//         name: data.name,
//         image: data.image
//     }));
//     displayProjects(projects);
// }

// const displayProjects = (projects) => {
//     console.log(projects);
// }

// fetchProjects();