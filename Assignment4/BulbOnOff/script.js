const shape = document.getElementById('shape');
const text = document.querySelector('p');

shape.addEventListener('click', () => {
  var time = 700 + randomNumGen(500);
  setTimeout(afterClicked, time);
  text.innerHTML = `It took ${time} ns to load!!`;
});

function afterClicked() {
  console.log('clicked..');
  shape.style.borderRadius = `${randomNumGen(100)}%`;
  shape.style.height = `${Math.max(10, randomNumGen(50))}%`;
  shape.style.width = `${Math.max(10, randomNumGen(50))}%`;
  shape.style.margin = randomPositionGenerator();
  shape.style.backgroundColor = text.style.color = randomColourGenerator();
}

function randomPositionGenerator() {
  let top = randomNumGen(screen.height);
  let right = randomNumGen(screen.width);
  let bottom = randomNumGen(screen.height);
  let left = randomNumGen(screen.width);
  //   console.log(screen.width);
  top = Math.min(top, screen.height - top);
  right = Math.min(right, screen.width - right);
  bottom = Math.min(bottom, screen.height - bottom);
  left = Math.min(left, screen.width - left);
  var margin = `${top}px ${right}px ${bottom}px ${left}px`;
  console.log(margin);
  return margin;
}

function randomNumGen(max) {
  return Math.floor(Math.random() * max);
}

function randomColourGenerator() {
  let hex = '0123456789abcdef';
  let code = '';
  for (let i = 0; i < 6; i++) code += hex[randomNumGen(16)];
  //   console.log(code);
  return '#' + code;
}