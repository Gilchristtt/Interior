document.addEventListener('DOMContentLoaded', function () {
    
    var serviceItems = document.querySelectorAll('.service-item');

    serviceItems.forEach(function (item) {
        item.addEventListener('click', function () {
        
            item.classList.toggle('is-flipped');
        });
    });
});
