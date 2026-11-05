# Padrões de Projetos (Design Patterns)

Exemplos em PHP dos 23 Padrões de Projetos (Design Patterns) relacionados ao Livro GOF.

Procurei organizar todos os padrões segundo a sua categoria, separados por pastas e em cada pasta coloquei o diagrama UML para ajudar no entendimento.

Caso você queira se aprofundar no tema, não deixe de conhecer o site GrowthCode:
[https://growthcode.com.br](https://growthcode.com.br/)

Disponibilizei diversos artigos sobre Padrões de Projetos utilizando PHP, onde você pode acessar no meu site: 
- [Resumo dos Padrões de Projetos (Design Patterns)](https://growthcode.com.br/programacao/resumo-dos-padroes-de-projetos-design-patterns/)
- [Descomplicando os Padrões de Projetos (Design Patterns)](https://growthcode.com.br/programacao/descomplicando-os-padroes-de-projetos-design-patterns/)



## Organização do Projeto linkando para o tutorial:

- `src/`
    - `Behavioral/`
        - [Padrão de Projeto Strategy em PHP com exemplo](https://growthcode.com.br/design-pattern/padrao-de-projeto-strategy-em-php-com-exemplo/)
        - [Padrão de Projeto Template Method em PHP com exemplo](https://growthcode.com.br/design-pattern/padrao-de-projeto-template-method-em-php-com-exemplo/)
        - [Padrão de Projeto Mediator em PHP com exemplo](https://growthcode.com.br/design-pattern/padrao-de-projeto-mediator-em-php-com-exemplo/)
        - [Padrão de Projeto Iterator em PHP com exemplo](https://growthcode.com.br/design-pattern/padrao-de-projeto-iterator-em-php-com-exemplo/)
        - [Padrão de Projeto Command em PHP com exemplo](https://growthcode.com.br/design-pattern/padrao-de-projeto-command-em-php-com-exemplo/)
        - [Padrão de Projeto Chain of Responsibility em PHP com exemplo](https://growthcode.com.br/design-pattern/padrao-de-projeto-chain-of-responsability-em-php-com-exemplo/)
        - [Padrão de Projeto Visitor em PHP com exemplo](https://growthcode.com.br/design-pattern/padrao-de-projeto-visitor-em-php-com-exemplo/)
        - [Padrão de Projeto Observer em PHP com exemplo](https://growthcode.com.br/design-pattern/padrao-de-projeto-observer-em-php-com-exemplo/)

    - `Creational/`

        - [Padrão de Projeto Abstract Factory em PHP com exemplo](https://growthcode.com.br/design-pattern/padrao-de-projeto-abstract-factory-em-php-com-exemplo/)
        - [Padrão de Projeto Builder em PHP com exemplo](https://growthcode.com.br/design-pattern/padrao-de-projeto-builder-em-php-com-exemplo/)
        - [Padrão de Projeto Factory Method em PHP com exemplo](https://growthcode.com.br/design-pattern/padrao-de-projeto-factory-method-em-php-com-exemplo/)
        - [Padrão de Projeto Prototype em PHP com exemplo](https://growthcode.com.br/design-pattern/padrao-de-projeto-prototype-em-php-com-exemplo/)
        - [Padrão de Projeto Singleton em PHP com exemplo](https://growthcode.com.br/design-pattern/padrao-de-projeto-singleton-em-php-com-exemplo/)
        
    - `Structural/`
        - [Padrão de Projeto Composite em PHP com exemplo](https://growthcode.com.br/design-pattern/padrao-de-projeto-composite-em-php-com-exemplo/)
        - [Padrão de Projeto Adapter em PHP com exemplo](https://growthcode.com.br/design-pattern/padrao-de-projeto-adapter-em-php-com-exemplo/)
- `tests/`
    - `Behavioral/`
    - `Creational/`
    - `Structural/`
    

A estrutura das pastas de `tests/` segue a mesma estrutura

## Instruções

Este projeto tem um arquivo `Makefile` para a execução dos testes

1. Faça clone deste projeto:

    `git clone https://github.com/growthdev-repo/design-patterns.git`

2. Entre na pasta do projeto:

    `cd design-patterns`

3. Execute a instalação dos pacotes do `composer`:

    `composer install`

4. Para executar os testes dos padrões basta executar no terminal:

    `make test`

5. Para executar os testes de uma classe específica:

    `make test NomeDaClass`

## Sobre nós

Este projeto foi desenvolvido por Walmir Silva autor do blog [https://growthcode.com.br](https://growthcode.com.br/)



