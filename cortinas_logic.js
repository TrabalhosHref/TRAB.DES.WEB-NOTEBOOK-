const imagens = [
    'https://trabalhoshref.github.io/mostruario-imagens/cortina_sanfona2.jpeg',
    'https://trabalhoshref.github.io/mostruario-imagens/persiana1.jpeg',
    'https://trabalhoshref.github.io/mostruario-imagens/cortina_trilho.jpeg',
	"https://trabalhoshref.github.io/mostruario-imagens/cortina_painel.jpeg",
	
];/*DEFINIÇÃO DE UM VETOR PARA ARMAZENAR O LINK DAS IMAGENS*/

const textos = ['Cortina Sanfona',
'Persiana',
'Cortina de Trilho',
'Cortina Painel'];

var index = 0;
var index2 = 0;/*É PRECISO DECLARAR AS VARIÁVEIS "DO LADO DE FORA" PARA ELAS NÃO RESETAREM AO SEREM CHAMADAS AS FUNÇOÕES*/

function trocarImagemRight() {
    const imagem = document.getElementById("imagem");/*UMA CONSTANTE RECEBE O VALOR DE "IMAGEM" QUE ESTÁ LOCALIZADA NA PAGINA HTML*/
    	const texto = document.getElementById("texto");
		
    index = (index + 1) % imagens.length;
	index2 = (index2 + 1) % textos.length;
	
    imagem.src = imagens[index];
	texto.textContent = textos[index2];
}

function trocarImagemLeft() {
    const imagem = document.getElementById("imagem");
    const texto = document.getElementById("texto");
	
    index = (index - 1 + imagens.length) % imagens.length;
	index2 = (index2 - 1 + textos.length) % textos.length;
	
    imagem.src = imagens[index];
	texto.textContent = textos[index2];
	
}

setInterval(trocarImagemRight,3000);