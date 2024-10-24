var banners = document.querySelectorAll('.pageHome__banners__banner__list__item');
var navManualContainer = document.querySelector('.pageHome__banners__banner__navManual');
var dots = []; // Armazena as bolinhas para facilitar a manipulação
var totalBanners = banners.length;
var cont = 1;

// Função para criar bolinhas dinamicamente
function createDots() {
  for (let i = 1; i <= totalBanners; i++) {
    // Criar um novo input radio
    let newRadio = document.createElement('input');
    newRadio.type = 'radio';
    newRadio.name = 'radio-btn';
    newRadio.id = 'radio' + i;
    document.querySelector('.pageHome__banners__banner').insertBefore(newRadio, navManualContainer);

    // Criar um novo label (bolinha)
    let newLabel = document.createElement('label');
    newLabel.classList.add('pageHome__banners__banner__navManual__btn');
    newLabel.setAttribute('for', 'radio' + i);
    navManualContainer.appendChild(newLabel);

    // Adicionar ao array de bolinhas
    dots.push(newLabel);

    // Adicionar evento de clique ao label
    newLabel.addEventListener('click', function () {
      cont = i;  // Atualizar o contador para a imagem correspondente
      updateBanner();  // Atualiza a imagem ao clicar
    });
  }
}

// Função para atualizar o banner e a bolinha ativa
function updateBanner() {
  // Remover a classe active de todos os itens e bolinhas
  banners.forEach(item => item.classList.remove('active'));
  dots.forEach(dot => dot.classList.remove('active'));

  // Adicionar a classe active ao item e bolinha correspondentes
  banners[cont - 1].classList.add('active');
  dots[cont - 1].classList.add('active');

  // Selecionar o radio correspondente
  document.getElementById('radio' + cont).checked = true;
}

// Inicializar bolinhas
createDots();

// Selecionar o primeiro radio e a primeira imagem como ativos ao iniciar
document.getElementById('radio1').checked = true;
banners[0].classList.add('active');
dots[0].classList.add('active');  // Primeira bolinha ativa

// Define o tempo de exibição automática da imagem
setInterval(() => {
  cont++;
  if (cont > totalBanners) {
    cont = 1;
  }
  updateBanner();
}, 10000);
