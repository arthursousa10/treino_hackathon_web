// Seleciona o formulário de doação e o elemento com as informações do PIX
const donateForm = document.getElementById('donateForm');
const pixInfo = document.getElementById('pixInfo');

// Adiciona um evento de envio ao formulário de doação
donateForm.addEventListener('submit', function(event) {
  event.preventDefault(); // Previne o envio padrão do formulário
  
  // Obtém o valor digitado pelo usuário
  const valor = document.getElementById('valorInput').value;
  
  // Verifica se o valor é válido (positivo e não vazio)
  if (valor && valor > 0) {
    // Exibe as informações do PIX
    pixInfo.style.display = 'block';
  } else {
    // Caso o valor não seja válido, não faz nada (pode adicionar um feedback aqui)
  }
});
