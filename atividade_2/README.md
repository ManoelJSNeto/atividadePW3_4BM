# atividade 2 - estacionamento Center Park

## descricao

o estacionamento **Center Park** precisa de um sistema em **PHP** para calcular o valor a ser pago pelos clientes com base no tipo de veiculo e no tempo de permanencia.

---

## menu principal

```
=================================
        CENTER PARK
=================================
1 - carro
2 - moto
3 - SUV
4 - caminhonete
=================================
```

---

## tabela de precos

| veiculo      | valor por hora |
|--------------|----------------|
| carro        | R$ 8,00        |
| moto         | R$ 5,00        |
| SUV          | R$ 12,00       |
| caminhonete  | R$ 15,00       |

---

## regras de desconto

| tempo de permanencia | desconto     |
|----------------------|--------------|
| ate 2 horas          | sem desconto |
| de 3 a 5 horas       | 5%           |
| acima de 5 horas     | 10%          |

> **desconto adicional:** clientes que permanecerem **mais de 8 horas** recebem um desconto extra de **5%** sobre o valor.

---

## saida esperada

```
=================================
           RESUMO
=================================
tipo de veiculo: carro
horas: 4
valor bruto: R$ 32,00
desconto: R$ 1,60
valor final: R$ 30,40
=================================
```

---

## requisitos tecnicos

- linguagem: **PHP**
- usar `switch/case` para identificar o tipo de veiculo
- usar `if/else` para determinar o percentual de desconto
- usar operadores matematicos para os calculos
- usar variaveis para armazenar os valores intermediarios
