# atividade recuperacao - caixa eletronico

## descricao

crie um site em **PHP** que simule um caixa eletronico, permitindo ao usuario realizar saques a partir de um saldo informado.

---

## fluxo do sistema

### 1. saldo inicial
- solicitar o **saldo disponivel** na conta
- o saldo deve ser **maior que zero** — caso contrario, solicitar novamente

### 2. realizacao de saques
para cada saque, o sistema deve:

- solicitar o valor do saque
- verificar se o valor e maior que zero
- verificar se ha saldo suficiente
- realizar o saque e atualizar o saldo

> o processo se repete **enquanto houver saldo disponivel**.

---

## exemplo de execucao

```
informe seu saldo: 500

valor do saque: 100
saque realizado!

valor do saque: 150
saque realizado!

valor do saque: 300
saldo insuficiente!

valor do saque: 250
saque realizado!

================================
saldo restante:        R$ 0,00
quantidade de saques:  3
total sacado:          R$ 500,00
================================
```

---

## resumo final

ao encerrar, o sistema deve exibir:

| campo                  | valor       |
|------------------------|-------------|
| quantidade de saques   | 3           |
| total sacado           | R$ 500,00   |
| saldo restante         | R$ 0,00     |

---

## requisitos tecnicos

- linguagem: **PHP**
- usar estrutura de repeticao (`while`) para os saques
- usar `if/else` para validacoes de saldo e valor
- usar variaveis para controlar saldo, total sacado e contador de saques
