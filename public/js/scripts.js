
    document.addEventListener('DOMContentLoaded', () => {
        const img = document.querySelector('.card-img-top');
        img.addEventListener('mouseover', () => {
            img.style.transform = 'scale(0.8)';
            img.style.transition = 'transform 0.5s ease';
        });
        img.addEventListener('mouseout', () => {
            img.style.transform = 'scale(1)';
        });
    });
