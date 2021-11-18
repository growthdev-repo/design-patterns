# Padrões de Projetos (Design Patterns)

Exemplos em PHP dos 23 Padrões de Projetos (Design Patterns) relacionados ao Livro GOF.

Procurei organizar todos os padrões segundo a sua categoria, separados por pastas e em cada pasta coloquei o diarama UML para ajudar no entendimento.

Casos você queira se aprofundar no tema, não deixe  de conheceu o site Growth Dev:
[https://growthdev.com.br](https://growthdev.com.br/)

Disponibilizei diversos artigos sobre Padrões de Proejtos utilizando PHP, onde você pode acessar no meu site: 
- [Resumo dos Padrões de Projetos (Design Patterns)](https://growthdev.com.br/design-pattern/resumo-dos-padroes-de-projetos-design-patterns/)
- [Descomplicando os Padrões de Projetos (Design Patterns)](hhttps://growthdev.com.br/design-pattern/descomplicando-os-padroes-de-projetos-design-patterns/)



## Organização do Projeto linkando para o tutorial:

- `src/`
    - `Behavioral/`
        - [Padrão de Projeto Strategy em PHP com exemplo](https://growthdev.com.br/design-pattern/padrao-de-projeto-strategy-em-php-com-exemplo/)
    - `Creational/`
        - [Padrão de Projeto Builder em PHP com exemplo](https://growthdev.com.br/design-pattern/padrao-de-projeto-builder-em-php-com-exemplo/)
        - [Padrão de Projeto Factory Method em PHP com exemplo](https://growthdev.com.br/design-pattern/padrao-de-projeto-factory-method-em-php-com-exemplo/)
        - [Padrão de Projeto Singleton em PHP com exemplo](https://growthdev.com.br/design-pattern/padrao-de-projeto-singleton-em-php-com-exemplo/)
        
    - `Structural/`    
- `tests/`
    - `Behavioral/`
    - `Creational/`
    - `Structural/`
    

A estrutura da pastas de `tests/` segue a mesma estrutura

## Instruções

Este projetos tem um arquivo `Makefile` para a execução dos testes

1. Faça clone deste projeto:

    `git clone https://github.com/growthdev-repo/design-patterns.git`

2. Entre no na pasta do projeto:

    `cd design-patterns`

3. Execute a instalação dos pacotes do `ccomposer`:

    `composer intall`

4. Para executar os testes dos padrões basta executar no terminal:

    `make test`

5. Para executar os testes de uma classe especídica:

    `make test NomeDaClass`
## Sobre nós

Este projeto foi desenvoldido por Walmir Silva autor do blog [https://growthdev.com.br](https://growthdev.com.br/)



