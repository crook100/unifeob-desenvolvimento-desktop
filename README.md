# 📦 Gerenciador de Estoque

![image](https://github.com/user-attachments/assets/68738382-eb23-4478-94ce-33f3fcb0907b)


## 🛠️ Tecnologias Utilizadas

O Gerenciador de Estoque foi desenvolvido utilizando as seguintes tecnologias:

- **PHP** ⚡
- **Lavarel** ⚛️
- **Composer** 🎨
- **MySQL** 🏧

## 🚀 Como executar o projeto

Siga os passos abaixo para rodar o projeto em seu ambiente local:

### 1️⃣ Clone o repositório

Clique no botão "Clone" acima ou execute o seguinte comando no terminal:

```bash
git clone https://github.com/crook100/unifeob-desenvolvimento-desktop
```

Isso criará uma cópia local do repositório em seu ambiente.

### 2️⃣ Instale os requisitos

Para poder rodar o projeto, você precisará ter em seu computador instalado os seguintes programas:
 - PHP (v8.0+)
 - Composer
 - XAMPP (ou qualquer outro aplicativo que disponibilize um banco de dados MySQL)

### 3️⃣ Instalação e Configuração
Após clonar o repositório e instalar os requisitos, utilize o comando ``composer install`` para instalar as dependencias do projeto.
Em seguida, abra o arquivo ``.env`` na raiz do projeto e altere as configurações de conexão com o banco de dados, seguindo o exemplo abaixo:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=desenvolvimento_desktop
DB_USERNAME=root
DB_PASSWORD=
```
Lembre-se que você precisa já ter criado o banco de dados em branco no XAMPP antes de executar os próximos comandos.


Após configurar o banco, navegue para a raiz do projeto e utilize o comando ``php artisan migrate:fresh`` para criar as tabelas do banco.

Caso prefira, segue abaixo as queries SQL nativas para criação das tabelas:
```
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `products_historic` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `operation` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_historic_product_id_foreign` (`product_id`),
  CONSTRAINT `products_historic_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```
## 4️⃣ Utilizando o sistema
Após configurar corretamente o sistema, vá até a raiz do projeto e utilize o comando ```php artisan serve```, com esse comando o sistema será iniciado e pode ser acessado em qualquer navegador utilizando a URL que aparecerá no console após o comando, geralmente ```127.0.0.1:8000```.



## 5️⃣ Diagrama do banco de dados
![image](https://github.com/user-attachments/assets/0e3ad39b-ee6c-46e5-8f2d-27e503852570)



