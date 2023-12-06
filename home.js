const mapFrame = document.getElementById("SuzerLocation");
const controlButton = document.getElementById("Suzer");




controlButton.addEventListener("click", function () {
    // Toggle the frame's visibility
    if (SuzerLocation.style.display === "none") {
        SuzerLocation.style.display = "block";
        controlButton.innerText = "Hide Suzer Location";
    } else {
        SuzerLocation.style.display = "none";
        controlButton.innerText = "Show Suzer Location";
    }
});




controlButton.addEventListener("click", function() {
    // You can change the map's coordinates or other parameters here
    mapFrame.src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2344.887484942461!2d31.219792831371475!3d29.87025155182069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584bd553b25c81%3A0x8c577a7fabef89d!2z2YfYsdmFINiy2YjYs9ix!5e1!3m2!1sar!2seg!4v1698309655036!5m2!1sar!2seg";
  });


const text = document.querySelector('.moving-text');

text.addEventListener('mousemove', (e) => {
    const { clientX, clientY } = e;
    const { left, top, width, height } = text.getBoundingClientRect();
    const x = (clientX - left - width / 2) / (width / 2);
    const y = (clientY - top - height / 2) / (height / 2);
    const maxMove = 20;

    const moveX = x * maxMove;
    const moveY = y * maxMove;

    text.style.transform = `translate(${moveX}px, ${moveY}px)`;
});

text.addEventListener('mouseout', () => {
    text.style.transform = 'translate(0, 0)';
});