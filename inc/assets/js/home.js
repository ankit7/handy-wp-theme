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

// exit popup
bioEp.init({
  // Options
  html:
    '<div id="bio_ep_content">' +
    '<img src="http://beeker.io/images/posts/2/tag.png" alt="Claim your discount!" />' +
    '<span>HOLD ON!</span>' +
    '<span>Click the button below to get a special discount</span>' +
    '<span>This offer will NOT show again!</span>' +
    '<a href="#YOURURLHERE" class="bio_btn">CLAIM YOUR DISCOUNT</a>' +
    '</div>',
  css:
    '#bio_ep {width: 400px; height: 300px; color: #333; background-color: #fafafa; text-align: center;}' +
    '#bio_ep_content {padding: 24px 0 0 0; font-family: "Titillium Web";}' +
    '#bio_ep_content span:nth-child(2) {display: block; color: #f21b1b; font-size: 32px; font-weight: 600;}' +
    '#bio_ep_content span:nth-child(3) {display: block; font-size: 16px;}' +
    '#bio_ep_content span:nth-child(4) {display: block; margin: -5px 0 0 0; font-size: 16px; font-weight: 600;}' +
    '.bio_btn {display: inline-block; margin: 18px 0 0 0; padding: 7px; color: #fff; font-size: 14px; font-weight: 600; background-color: #70bb39; border: 1px solid #47ad0b; cursor: pointer; -webkit-appearance: none; -moz-appearance: none; border-radius: 0; text-decoration: none;}',
  cookieExp: 7,
});
