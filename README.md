# Olá, Mundo

Eu tentei fazer esses testes prático na plataforma da Turing uma vez e não passei, agora eu refiz sozinha e consegui fazer!!

Porém levou mais tempo do que eu gostaria, mas estamos aí!

Estou postando aqui para acompanhar o meu progresso!!

@Turing me nota, por favor !
:smile:

</br>
</br>
</br>

## O problema 1 é a pontuação de um jogo de Baseball / Baseball Game

Será usado como input a variavel $ops, que é um array de Strings.
</br>
As seguintes regras são aplicadas aos itens do array, eles podem ser:

- Integer - Esse item somará ao total dos pontos;
</br></br>
- "+" - Esse item somará ao total de pontos, sendo que esse valor é a soma dos últimos dois números registrados;
</br></br>
- "D" - Esse item somará ao total de pontos, sendo que esse valor será o dobro do último valor registrado;
</br></br>
- "C" - Esse item torna inválida o último valor resgistrado.

Retornando a soma de todos os valores registrados.

Exemplo1:
</br>
input: $ops = ["5", "2", "C", "D", "+"];
output: 30

Explicação:
"5" - Adiciona 5 aos registros, sendo agora [5]; </br>
"2" - Adiciona 2 aos registros, sendo agora [5, 2]; </br>
"C" - Cancela o último valor dos registros, sendo agora [5];</br>
"D" - Dobra o último valor dos registros, ou seja 5 * 2, sendo agora [5, 10]; </br>
"+" - Adiciona os dois últimos registos, ou seja 5 + 10, sendo agora [5, 10, 15];</br>

Retorna a soma dos registros, ou seja 5 + 10 + 15 = 30.

</br>
</br>
</br>

## O problema 2 é a validação de parênteses  / Valid Parentheses

Será utilizado com input uma string $s que pode conter os caractéres "{", "}", "(", ")", "[" e/ou "]".

Essa string deverá ser validada, sendo que as regras são:

- O caracter de abertura deve ter seu respectivo carcater de fechamento;
- O caracter de abertura deve ser fechado na ordem correta;

Exemplo 1: </br>
input: $s = "()"
output: valid;
</br>

Exemplo 2: </br>
input: $s = "({[]})"
output: valid;
</br>

Exemplo 3: </br>
input: $s = "(]"
output: invalid;
</br>

Exemplo 4: </br>
input: $s = "(])"
output: invalid;
</br>

Exemplo 5: </br>
input: $s = "([]{})"
output: valid;
</br>

:smirk:
