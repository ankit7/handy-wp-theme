let vw = document.documentElement.clientWidth;
var elms = document.getElementsByClassName('splide');
for (var i = 0, len = elms.length; i < len; i++) {
  let config = {};
  if (i === 0) {
    if (vw >= 768) {
      config = {
        type: 'row',
        autoplay: false,
        perPage: 6,
        pagination: false,
        arrows: false,
        autoWidth: true,
      };
    } else {
      config = {
        type: 'loop',
        autoplay: true,
        perPage: 1,
        pagination: false,
        arrows: false,
      };
    }
  }

  if (i === 1)
    config = {
      type: 'loop',
      autoplay: true,
    };
  if (i === 2)
    if (vw >= 768) {
      config = {
        type: 'loop',
        autoplay: true,
        perPage: 2,
        pagination: false,
        padding: {
          right: 200,
        },
      };
    } else {
      config = {
        type: 'loop',
        autoplay: false,
        perPage: 1,
        pagination: false,
        padding: {
          right: 80,
        },
      };
    }

  new Splide(elms[i], config).mount();
}
