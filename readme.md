# Mini Framework MVC em PHP

Projeto desenvolvido durante os estudos do curso **Desenvolvimento Web Completo** do professor **Jamilton Damasceno**, com o objetivo de compreender a construção de um mini framework MVC utilizando PHP puro, Composer e Autoload PSR-4.

## 📖 Sobre o projeto

Este projeto implementa, de forma simplificada, a estrutura de um framework MVC, permitindo entender como frameworks como Laravel, Symfony e CodeIgniter funcionam internamente.

Durante o desenvolvimento foram implementados conceitos como:

- Arquitetura MVC (Model-View-Controller)
- Sistema de Rotas
- Controllers
- Models
- Views
- Layouts
- Front Controller
- Autoload com Composer (PSR-4)
- Namespace
- Abstração
- Herança
- Banco de dados com PDO
- Organização em camadas

---

## 📂 Estrutura do Projeto

```
mini_framework/
│
├── App/
│   ├── Controllers/
│   ├── Models/
│   ├── Views/
│   ├── Connection.php
│   └── Route.php
│
├── Public/
│   ├── .htaccess
│   └── index.php
│
├── vendor/
│   ├── composer/
│   └── MF/
│       ├── Controller/
│       └── Init/
│
├── composer.json
└── composer.lock
```

---

## 🛠 Tecnologias utilizadas

- PHP 8
- Composer
- MySQL
- PDO
- HTML5
- Bootstrap 4
- Apache (XAMPP)

---

## 🚀 Funcionalidades

- Sistema de rotas personalizado
- Front Controller
- Renderização de Views
- Layout principal
- Separação entre Controller, Model e View
- Conexão com banco de dados utilizando PDO
- Carregamento automático de classes com Composer

---

## 🗄 Banco de Dados

O projeto utiliza um banco chamado **mvc**.

Exemplo da tabela utilizada:

```sql
CREATE DATABASE mvc;

USE mvc;

CREATE TABLE tb_produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(100),
    preco DECIMAL(10,2)
);

INSERT INTO tb_produtos(descricao, preco)
VALUES
('Notebook', 3500.00),
('Mouse Gamer', 150.00),
('Monitor', 1200.00);
```

---

## ▶ Como executar

### Clone o projeto

```bash
git clone https://github.com/leobernardo05/Projeto_MVC.git
```

### Acesse a pasta

```bash
cd Projeto_MVC/mini_framework
```

### Instale as dependências

```bash
composer install
```

### Execute o servidor

```bash
cd Public

php -S localhost:8080
```

Acesse:

```
http://localhost:8080
```

---

## 📚 Conceitos estudados

- MVC
- Composer
- PSR-4
- Namespaces
- Autoload
- Front Controller
- Layouts
- Roteamento
- Controllers
- Models
- Views
- Herança
- Classes Abstratas
- Encapsulamento
- PDO
- SQL

---

## 🎯 Objetivo

Este projeto foi desenvolvido exclusivamente para fins de estudo, buscando compreender a implementação interna de um framework MVC em PHP e reforçar conceitos de Programação Orientada a Objetos.

---

## 👨‍💻 Autor

**Leonardo Bernardo**

- GitHub: https://github.com/leobernardo05
- LinkedIn: https://www.linkedin.com/in/leonardo0503/

---

⭐ Projeto desenvolvido para estudos de PHP, Composer e arquitetura MVC.