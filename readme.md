# php-orm

> PROJETO NÃO FINALIZADO

Um sistema ORM feito em php de forma simples e prática, controle seu banco de dados sem nenhuma dificuldade.

**ATENÇÃO:** Este projeto mexe apenas na manipulação do banco de dados, caso queira criar as migrations, dê uma olhada em meu [Cli Tool](https://github.com/silvaleal/php-cli).

## Exemplo básico
```php
use App\Models\User;
use App\Database\Database;

$database = new Database(); # Classe que fica salvo o método de conectar com o seu banco de dados.

$model = new User($database);
$model->select()
        ->join('guilds', 'users.id = guilds.owner_id')
        ->where('id', 1);

print_r($model->first());
```