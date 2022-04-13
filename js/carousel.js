document.addEventListener( 'DOMContentLoaded', function () {
    // new Splide( '#testic', {
    //     heightRatio: 0.2,
    //     // perPage: 1,
    //     // type: 'loop',
    //     // padding: '5rem',
    // }).mount();

    new Splide('.splide', {
        type: 'loop',
        padding: '14rem',
        breakpoints: {
            990: {
                padding: '6rem',
            },
            900: {
                padding: '2rem',
            }
        }
    }).mount();
});