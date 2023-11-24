var design = anime({
  targets: 'svg #XMLID5',
  keyframes: [
    {translateX: -1000},
    {rotateY: 180},
    {translateX: 1500},
    {rotateY: 0},
    {translateX: -1000},
    {rotateY: 180},
    {translateX: -1000},
  ],
  easing: 'easeInOutSine',
  duration: 10000,
});

anime({
  targets: '#dust-paarticle path',
  translateY: [10, -150],
  direction: 'alternate',
  loop: true,
  delay: function(el, i, l) {
    return i * 100;
  },
  endDelay: function(el, i, l) {
    return (l - i) * 100;
  }
});