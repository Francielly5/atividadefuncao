 <!-- 
  1 Crie uma função em PHP que receba um nome como parâmetro e exiba uma mensagem de saudação personalizada. OK
  2 Crie uma função que receba dois números como parâmetros, realize a soma e retorne o resultado.
  3 Crie uma função que receba um número inteiro e retorne se ele é par ou ímpar.
  4 Crie uma função que receba três números como parâmetros e retorne o maior valor entre eles.
  5 Crie uma função que receba uma string e retorne essa string invertida, sem utilizar funções prontas do PHP para inversão.
  6 Crie uma função que receba o valor de uma compra e aplique descontos conforme a regra: acima de R$ 100,00 recebe 10%; acima de R$ 300,00 recebe 15%; acima de R$ 500,00 recebe 20%.
  7 Crie uma função que receba nome e sobrenome e gere um login no formato:
primeironome.sobrenome
  8 Crie uma função que receba o valor de um produto e retorne o valor do frete:
até R$100 → R$20
até R$300 → R$15
acima disso → frete grátis
  9 Crie uma função que receba uma senha e verifique se ela atende aos critérios:

mínimo 8 caracteres
possui número
possui letra maiúscula
  10 Crie uma função em PHP chamada gerarToken() que gere um token aleatório para ser utilizado em sistemas de login, recuperação de senha ou confirmação de cadastro.
A função deve:

gerar uma sequência aleatória de caracteres;
permitir definir o tamanho do token;
retornar o token gerado;
exibir o token na tela.
Ex.: A7x9Kp2LmQ  -->


<?php

// 1. Saudação personalizada (exibe)
function mensagem(){
    echo "Ola, Seja bem-vindo(a)";
   
}

function comParametro($nome){
    echo "Seja bem-vinda $nome";

}

mensagem();
echo"<br>";

comParametro("Francilly");
echo"<br>";


?>









