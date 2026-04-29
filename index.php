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

// 1.
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

//2.

function soma($valor1,$valor2){
  return $valor1 + $valor2;


}
echo soma(30,7);

//3

function par($valor1)
{
  if($valor1 % 2 == 0){
    return "$valor1 e par";
  }
  else{
    return "$valor1 e impar";
  }

}
echo "<br>";
 echo par(6);


 //4

 function tres($v1,$v2,$v3){
if($v1 > $v2 && $v1 > $v3){
  return "entao o $v1 e maior que todos";
}
elseif($v2 > $v1 && $v2 > $v3){
  return "entao $v2 e maior que todos";
}
elseif($v3 > $v1 && $v3 > $v2){
  return "entao $v3 e maior que todos";
}
else{
return "Nenhum valor encontrado para comparar";

}
}
echo "<br>";
echo "<br>";
echo tres(56,10,6);

//5

function Inverter($str){

$invertido = '';
$i =strlen($str);

while($i--){
  $invertido .= $str[$i];
  
}
return $invertido;

}
echo "<br>";
echo "<br>";

echo inverter("love");

//6

function aplicarDesconto($valor) {
    if ($valor > 500) {
        $desconto = 0.20;
    } elseif ($valor > 300) {
        $desconto = 0.15;
    } elseif ($valor > 100) {
        $desconto = 0.10;
    } else {
        $desconto = 0;
    }

    $valorFinal = $valor - ($valor * $desconto);
    return $valorFinal;
}

echo "<br>";
echo "<br>";

// Exemplo de uso
echo aplicarDesconto(350); // Saída: 297.5

//7

function gerarLogin($nome, $sobrenome) {
    $login = strtolower($nome . "." . $sobrenome);
    return $login;
}

echo "<br>";
echo "<br>";

// Exemplo de uso
echo gerarLogin("Fran", "Mell"); // saída: fran.mell

//8

function calcularFrete($valorProduto) {
    if ($valorProduto <= 100) {
        return 20;
    } elseif ($valorProduto <= 300) {
        return 15;
    } else {
        return 0; // frete grátis
    }
}

echo "<br>";
echo "<br>";

// Exemplo de uso
echo calcularFrete(80);   // 20
echo "<br>";
echo calcularFrete(200);  // 15
echo "<br>";
echo calcularFrete(350);  // 0

//9

function validarSenha($senha) {
    $temNumero = false;
    $temMaiuscula = false;

    // verifica tamanho
    if (strlen($senha) < 8) {
        return "Senha inválida";
    }

    // percorre cada caractere
    for ($i = 0; $i < strlen($senha); $i++) {
        $letra = $senha[$i];

        // verifica número
        if ($letra >= '0' && $letra <= '9') {
            $temNumero = true;
        }

        // verifica letra maiúscula
        if ($letra >= 'A' && $letra <= 'Z') {
            $temMaiuscula = true;
        }
    }

    if ($temNumero && $temMaiuscula) {
        return "Senha valida";
    } else {
        return "Senha invalida";
    }
}

echo "<br>";
echo "<br>";

// Exemplo
echo validarSenha("franjaaF12");


//10

function gerarToken($tamanho) {
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $token = "";

    for ($i = 0; $i < $tamanho; $i++) {
        $posicao = rand(0, strlen($caracteres) - 1);
        $token .= $caracteres[$posicao];
    }

    echo $token; // exibe na tela
    return $token; // retorna o valor
}

echo "<br>";
echo "<br>";

// Exemplo de uso
gerarToken(6);

?>







