// calculate the offset
function calculateOffset(t, c) {
  const target = c - (c * t) / 100;
  return target;
}

if (document.querySelector('.eco-conception-container .progress')) {
  /* eslint-disable no-undef */
  const secondGauge = document.querySelector('.eco-conception-container .progress');

  /* eslint radix: "error" */
  const secondTarget = parseInt(secondGauge.getAttribute('data-target'), 10);
  const secondGaugeReadout = document.querySelector('.eco-conception-container .percentage > .value');

  // constiables
  const gaugeR = parseInt(document.querySelectorAll('circle')[0].getAttribute('r'), 10);
  const gaugeC = gaugeR * Math.PI * 2;
  const animationDuration = 1.5;

  // init svg circles
  const circles = document.querySelectorAll('circle');
  const gauges = document.querySelectorAll('.progress');
  TweenMax.set(circles, {
    strokeDashoffset: gaugeC,
  });

  TweenMax.set(gauges, {
    attr: {
      'stroke-dasharray': `${gaugeC} ${gaugeC}`,
    },
  });
  // timeline
  const tl = new TimelineMax();

  tl.to(secondGauge, animationDuration, {

    strokeDashoffset: calculateOffset(secondTarget, gaugeC),
    ease: Power3.easeInOut,
    onUpdate() {
      const currentStrokeOffset = parseInt(secondGauge.style.strokeDashoffset, 10);
      secondGaugeReadout.textContent = Math.round(100 - (currentStrokeOffset * 100) / gaugeC);
    },
  });
}
