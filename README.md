# Catálogo Online com Área Administrativa

![GitHub repo size](https://img.shields.io/github/repo-size/Felypeulian/Projeto-Area-Administrativa?style=for-the-badge)
![GitHub language count](https://img.shields.io/github/languages/count/Felypeulian/Projeto-Area-Administrativa?style=for-the-badge)
![GitHub forks](https://img.shields.io/github/forks/Felypeulian/Projeto-Area-Administrativa?style=for-the-badge)
![GitHub open issues](https://img.shields.io/github/issues/Felypeulian/Projeto-Area-Administrativa?style=for-the-badge)
![GitHub open pull requests](https://img.shields.io/github/issues-pr/Felypeulian/Projeto-Area-Administrativa?style=for-the-badge)

> Um catálogo de produtos com gerenciamento administrativo. Desenvolvido como projeto acadêmico com PHP, HTML e CSS, o sistema apresenta a loja fictícia **Loja Aurora** e permite cadastrar, editar e excluir produtos por meio de uma conta de administrador.

## Ajustes e melhorias

Recursos implementados no projeto:

- [x] Catálogo público com nome, descrição e preço dos produtos.
- [x] Cadastro de usuários e login por e-mail e senha.
- [x] Separação entre contas comuns e administrador.
- [x] Cadastro, edição e exclusão de produtos na área administrativa.
- [x] Validação dos campos e dos preços no servidor.
- [x] Senhas protegidas com `password_hash()` e verificadas com `password_verify()`.
- [x] Gerenciamento dos dados com sessões PHP.

Os usuários e os produtos são mantidos na sessão do navegador, sem banco de dados. As alterações não são compartilhadas entre sessões e não têm persistência permanente.

## 🛠️ Tecnologias

| Tecnologia | Aplicação |
| --- | --- |
| **PHP** | Autenticação, controle de acesso, sessões e gerenciamento dos produtos. |
| **HTML5** | Estrutura do catálogo e dos formulários. |
| **CSS3** | Estilização da interface e organização visual dos componentes. |

## 💻 Pré-requisitos

- Um computador com **Windows** e um navegador.
- **XAMPP** com PHP 8.0 ou superior e a extensão `mbstring` habilitada.
- Os arquivos deste repositório.

## 🚀 Instalando o projeto com XAMPP

### 1. Instale o XAMPP

Confira o [vídeo de instalação do XAMPP](https://youtu.be/9jWACl9_k54) indicado como guia.

1. Baixe o instalador para Windows no [site oficial do XAMPP](https://www.apachefriends.org/pt_br/index.html).
2. Execute o instalador e mantenha **Apache** e **PHP** entre os componentes selecionados.
3. Conclua a instalação na pasta `C:\xampp`.
4. Abra o **XAMPP Control Panel** e clique em **Start** ao lado de **Apache**.

### 2. Adicione o projeto

1. Neste repositório, clique em **Code → Download ZIP**.
2. Extraia o arquivo e renomeie a pasta para `Projeto-Area-Administrativa`.
3. Mova essa pasta para `C:\xampp\htdocs`.

O arquivo `index.php` deve ficar neste caminho:

```text
C:\xampp\htdocs\Projeto-Area-Administrativa\index.php
```

### 3. Abra no navegador

Com o Apache em execução, acesse:

[http://localhost/Projeto-Area-Administrativa/](http://localhost/Projeto-Area-Administrativa/)

O catálogo pode ser consultado sem login. O projeto não precisa de MySQL para funcionar.

Para mais detalhes sobre o painel e a pasta `htdocs`, consulte a [documentação oficial do XAMPP](https://www.apachefriends.org/faq_windows.html).

### 4. Acesse a administração

Clique em **Entrar** e utilize a conta de demonstração definida no projeto:

| Campo | Valor |
| --- | --- |
| E-mail | `admin@catalogo.com` |
| Senha | `123456` |

Após o login, o catálogo exibirá as opções para adicionar, editar e excluir produtos. Contas criadas pelo formulário de cadastro recebem o perfil de usuário comum.

As credenciais acima são destinadas à demonstração local do projeto acadêmico.

## 🤝 Autor

Projeto desenvolvido por **Felype Ulian Rodrigues** como atividade acadêmica.

<table>
  <tr>
    <td align="center">
      <a href="https://github.com/Felypeulian" title="Perfil de Felype Ulian no GitHub">
        <img src="https://github.com/Felypeulian.png" width="100" alt="Foto de Felype Ulian no GitHub"><br>
        <sub><b>Felype Ulian Rodrigues</b></sub>
      </a>
    </td>
  </tr>
</table>

[![LinkedIn](https://img.shields.io/badge/LinkedIn-Felype%20Ulian-0A66C2?style=for-the-badge)](https://www.linkedin.com/in/felype-ulian-438063347/)
[![GitHub](https://img.shields.io/badge/GitHub-Felypeulian-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/Felypeulian)
