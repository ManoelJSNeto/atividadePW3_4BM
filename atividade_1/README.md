# atividade 1 - loja de roupas Fashion Style

## descricao

a loja **Fashion Style** esta realizando uma grande promocao de inverno e precisa de um sistema em **PHP** que permita ao cliente realizar suas compras com calculo automatico de descontos.

---

## catalogo de produtos

| produto      | preco unitario |
|--------------|----------------|
| camiseta     | R$ 49,90       |
| calca jeans  | R$ 129,90      |
| jaqueta      | R$ 249,90      |
| vestido      | R$ 179,90      |
| tenis        | R$ 299,90      |

---

## tabela de descontos por produto

| produto      | desconto     |
|--------------|--------------|
| camiseta     | 5%           |
| calca jeans  | 10%          |
| jaqueta      | 15%          |
| vestido      | 8%           |
| tenis        | sem desconto |

---

## desconto adicional

> compras com valor final **acima de R$ 500,00** recebem um desconto adicional sobre o valor final.

---

## saida esperada

ao finalizar as compras, o sistema deve exibir:

- produtos comprados
- quantidade de cada produto
- valor bruto (sem desconto)
- valor total dos descontos
- valor final da compra

---

## requisitos tecnicos

- linguagem: **PHP**
- entrada de dados via formulario
- utilizar estruturas de controle (`if/else`, `switch`) para aplicar os descontos
- utilizar variaveis e operadores matematicos para os calculos
