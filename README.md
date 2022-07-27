# teste-logica
O cliente cadastrou na plataforma as variantes dos produtos sem especificação. 
Pediu para criarmos um seletor de variantes na página de produto. 
Mas a seguinte estrutura de dados não funciona bem para o desenvolvimento de um seletor de variantes.

Estrutura atual:
```php
[
    'azul-XG',
    'branco-PP',
    'azul-XG',
    'preto-PP',
    'preto-M',
    'branco-G',
    'preto-G',
    'vermelho-M',
    'preto-GG',
    'azul-P',
    'preto-GG', 
    'azul-XG', 
]
```

Precisamos que essa estrutura seja convertida para o seguinte formato.

```php
[
    'preto' =>  [
        'PP' => 1,
        'M' => 1,
        'G' => 1,
        'GG' => 2
    ],
    'branco' => [
        'PP'=> 1,
        'G' => 1
    ],
    'vermelho' => [
        'M' => 1
    ],
    'azul' => [
        'XG' => 3,
        'P' => 1
    ]
]
```
