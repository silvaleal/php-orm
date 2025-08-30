# php-orm

> PROJETO NÃO FINALIZADO

Um sistema ORM feito em php de forma simples e prática, controle seu banco de dados sem nenhuma dificuldade.

**ATENÇÃO:** Este projeto mexe apenas na manipulação do banco de dados, caso queira criar as migrations, dê uma olhada no [Karbom]([https://github.com/silvaleal/php-cli](https://github.com/silvaleal/karbom)), uma ferramenta CLI planejada para ser

## Exemplo básico
```php
use App\Models\User;
use App\Database\Database;

$database = new Database(); # Classe que fica salvo o método de conectar com o seu banco de dados.

$model = new User($database);
$model->select()
        ->innerJoin('guilds', 'users.id = guilds.owner_id')
        ->where('id', 1);

print_r($model->first());
```
