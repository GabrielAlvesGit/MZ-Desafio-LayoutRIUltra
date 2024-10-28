var banners = document.querySelectorAll('.pageHome__banners__banner__list__item');
var navManualContainer = document.querySelector('.pageHome__banners__banner__navManual');
var dots = []; 
var totalBanners = banners.length;
var cont = 1;

function createDots() {
  for (let i = 1; i <= totalBanners; i++) {
    let newRadio = document.createElement('input');
    newRadio.type = 'radio';
    newRadio.name = 'radio-btn';
    newRadio.id = 'radio' + i;
    document.querySelector('.pageHome__banners__banner').insertBefore(newRadio, navManualContainer);

    let newLabel = document.createElement('label');
    newLabel.classList.add('pageHome__banners__banner__navManual__btn');
    newLabel.setAttribute('for', 'radio' + i);
    navManualContainer.appendChild(newLabel);

    dots.push(newLabel);

    newLabel.addEventListener('click', function () {
      cont = i;  
      updateBanner();  
    });
  }
}

function updateBanner() {
  banners.forEach(item => item.classList.remove('active'));
  dots.forEach(dot => dot.classList.remove('active'));

  banners[cont - 1].classList.add('active');
  dots[cont - 1].classList.add('active');

  document.getElementById('radio' + cont).checked = true;
}

createDots();

document.getElementById('radio1').checked = true;
banners[0].classList.add('active');
dots[0].classList.add('active');  

setInterval(() => {
  cont++;
  if (cont > totalBanners) {
    cont = 1;
  }
  updateBanner();
}, 10000);
