## Softwar API

Uma API Rest com Laravel que retorne o ranking de tempo assistido, trazendo o nome do canal e uma lista ordenada com os usuários, seu recorde de tempo assistido(maior valor), posição e data.


## Tecnologias

- **PHP com framework Laravel 7**
- **Base de dados: PhpMyAdmin**


## Execução

Para iniciar é necessário clonar o projeto do GitHub num diretório de sua preferência:
- **https://github.com/williamsilva95/softwar-teste.git**

Faça uma copia do arquivo .env.example e deixe apenas como .env na mesma pasta do projeto

Após crie uma database com o nome **softwar**

Utilize o comando php artisan migrate padra subir as migration para a database criada

Após subir as Migrates rode o SQL abaixo para popular sua base de dados criadas:

**INSERT INTO `users` (id,name) VALUES**
**(1, 'Brian'),**
**(2, 'Bruno'),**
**(3, 'Otavio');**
**INSERT INTO channels (id,name) VALUES**
**(1, 'History'),**
**(2, 'MTV'),**
**(3, 'SBT');**
**INSERT INTO watched_times (id,user_id, channels_id,minute,`date`)**
**VALUES**
**(1,1,1,100.0,'2021-01-01 00:00:00.0'),**
**(2,1,1,180.0,'2021-01-02 00:00:00.0'),**
**(3,1,1,150.0,'2021-01-03 00:00:00.0'),**
**(4,1,1,110.0,'2021-01-04 00:00:00.0'),**
**(5,2,1,110.0,'2021-01-04 00:00:00.0'),**
**(6,2,1,140.0,'2021-01-05 00:00:00.0'),**
**(7,2,1,190.0,'2021-01-06 00:00:00.0'),**
**(8,3,1,170.0,'2021-01-01 00:00:00.0'),**
**(9,3,1,120.0,'2021-01-02 00:00:00.0'),**
**(10,3,1,130.0,'2021-01-03 00:00:00.0'),**
**(11,1,2,130.0,'2021-01-03 00:00:00.0'),**
**(12,2,2,130.0,'2021-01-03 00:00:00.0'),**
**(13,3,2,125.0,'2021-01-03 00:00:00.0'),**
**(14,1,2,110.0,'2021-01-05 00:00:00.0'),**
**(15,1,2,100.0,'2021-01-01 00:00:00.0'),**
**(16,2,2,120.0,'2021-01-01 00:00:00.0'),**
**(17,3,2,120.0,'2021-01-01 00:00:00.0');**

Utilize o comando **php artisan serve** para gerar o link de inicialização do projeto

Gerencie a API pelo Postman

