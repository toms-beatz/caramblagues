window.addEventListener('load', function () {

    var next_joke = document.getElementById('next-joke');
    var turn_around = document.getElementById('turn-around');
    var joke = this.document.getElementById('joke');

    next_joke.addEventListener('click', function () {
        location.reload();
    });

    var rotated = false;

    turn_around.addEventListener('click', function () {
        var joke = document.getElementById('joke');
        deg = rotated ? 0 : 180;

        joke.style.webkitTransform = 'rotate(' + deg + 'deg)';
        joke.style.mozTransform = 'rotate(' + deg + 'deg)';
        joke.style.msTransform = 'rotate(' + deg + 'deg)';
        joke.style.oTransform = 'rotate(' + deg + 'deg)';
        joke.style.transform = 'rotate(' + deg + 'deg)';
        joke.style.webkitTransition = 'all 0.5s ease-in-out';
        joke.style.mozTransition = 'all 0.5s ease-in-out';
        joke.style.oTransition = 'all 0.5s ease-in-out';
        joke.style.transition = 'all 0.5s ease-in-out';
        rotated = !rotated;
    });

    turn_around.addEventListener('mouseenter', function () {
        var svg_turn = document.getElementById('turn');
        deg = rotated ? 0 : 360;

        svg_turn.style.webkitTransform = 'rotate(' + deg + 'deg)';
        svg_turn.style.mozTransform = 'rotate(' + deg + 'deg)';
        svg_turn.style.msTransform = 'rotate(' + deg + 'deg)';
        svg_turn.style.oTransform = 'rotate(' + deg + 'deg)';
        svg_turn.style.transform = 'rotate(' + deg + 'deg)';
        svg_turn.style.webkitTransition = 'all 1s ease-in-out';
        svg_turn.style.mozTransition = 'all 1s ease-in-out';
        svg_turn.style.oTransition = 'all 1s ease-in-out';
        svg_turn.style.transition = 'all 1s ease-in-out';
        rotated = !rotated;
    });
});