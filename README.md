
## M2 Teste

Requisitos necessarios para rodar a aplicacao:

1- Ter um servidor xamp ou apache rodando
2 - ter o composer instalados
3 - ter o docker rodando na maquina

### Como Rodar a aplicacao

1- Fazer o clone do projeto

2 - Instalar as dependencias do composer com o comdando "composer install"

3 - configurar as credenciais do banco de dados 

4- executar o comando "composer migrate" para a criacao das tabelas do banco de dados 

5- se vai correr localmente use o comando "php artisan serve" 

6- para saber as routas da api use o comando "php artisan route:list"

## Listar todas as cidades cadastradas [api/cidades]

##  cadastradar cidade (metodo Post) [api/cidades]
{
    "nome":"Beira"
}



## Listar os grupos de cidades cadastradas [api/grupo-cidades]

## Cadastrar grupos de cidades (metodo |Post) [api/grupo-cidades]

## Listar todas os produtos cadastradas [api/produtos]

## Listar todas as desconto cadastradas [api/desconto]

## Listar todas as Campanha cadastradas [api/campanhas]

## Listar todas as cidades cadastradas [api/campanhas]
{
    "id_grupo_cidade":"2",
    "nome":"Milho",
    "status":"1",
}
