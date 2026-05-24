# 🚀 Laravel 12 Simple API

Uma API simples e direta construída utilizando apenas o arquivo de rotas `routes/web.php` no Laravel 12. Ideal para entender o funcionamento básico de roteamento e respostas JSON sem a complexidade de controllers dedicados.

## 🛠️ Tecnologias

- **PHP 8.2+**
- **Laravel 12**

## 🚀 Como Executar o Projeto

Siga os passos abaixo para rodar a API localmente:

### 1. Clonar o Repositório
```bash
git clone https://github.com
cd api
```

### 2. Instalar as Dependências
```bash
composer install
```

### 3. Configurar o Ambiente
Copie o arquivo de exemplo `.env`:
```bash
cp .env.example .env
```
Gere a chave da aplicação:
```bash
php artisan key:generate
```

### 4. Iniciar o Servidor
```bash
php artisan serve
```
A API estará disponível em `http://127.0.0.1:8000`.

## 🛣️ Rotas da API

Como este projeto utiliza o `routes/web.php`, as rotas não possuem o prefixo padrão `/api`. Abaixo estão os endpoints disponíveis:

### Exemplo de Endpoint

- **URL:** `GET /`
- **Descrição:** Retorna uma mensagem de boas-vindas em formato JSON.
- **Resposta de Sucesso (200):**
  ```json
  {
    "status": "success",
    "message": "Welcome to the Laravel 12 Simple API"
  }
  ```

## 📝 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
