# atividades PW3 - 4BM

projeto com 3 aplicacoes PHP rodando em um unico container Docker.

---

## estrutura do projeto

```
atividadePW3_4BM/
├── docker-compose.yml
├── index.html
├── style.css
├── atividade_1/
│   ├── index.html
│   └── calcular.php
├── atividade_2/
│   ├── index.html
│   └── calcular.php
└── atividade_recuperacao/
    ├── index.html
    ├── caixa.php
    └── encerrar.php
```

---

## pre-requisitos

voce precisa ter o Docker instalado na sua maquina.

- download: https://www.docker.com/products/docker-desktop

para verificar se o Docker esta instalado, rode no terminal:

```bash
docker --version
```

---

## como iniciar

### 1. abra o terminal na pasta do projeto

no Windows, voce pode abrir o terminal na pasta clicando com o botao direito
dentro da pasta e selecionando "abrir no terminal" (ou "Git Bash", "PowerShell").

### 2. suba o container

```bash
docker compose up
```

o Docker vai baixar a imagem `php:8.2-apache` na primeira vez (pode demorar um pouco).
nas proximas vezes sera instantaneo.

### 3. acesse no navegador

abra o navegador e acesse:

```
http://localhost:8080
```

voce vera a pagina inicial com os links para cada atividade.

---

## como parar

no terminal onde o Docker esta rodando, pressione:

```
Ctrl + C
```

ou em outro terminal rode:

```bash
docker compose down
```

---

## dicas

- qualquer alteracao nos arquivos PHP ou HTML ja reflete automaticamente no navegador,
  nao e necessario reiniciar o container.

- se a porta 8080 ja estiver em uso na sua maquina, edite o `docker-compose.yml`
  e troque `8080:80` pela porta que preferir, por exemplo `9090:80`.

---

## atividades

| atividade        | descricao                          | link                                    |
|------------------|------------------------------------|-----------------------------------------|
| atividade 1      | loja Fashion Style                 | http://localhost:8080/atividade_1/      |
| atividade 2      | estacionamento Center Park         | http://localhost:8080/atividade_2/      |
| recuperacao      | caixa eletronico                   | http://localhost:8080/atividade_recuperacao/ |
