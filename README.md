# tuto-cloudson-tdd-phpunit
Following tutorial on http://blog.claudson.com.br/2015/02/18/tdd-com-phpunit-um-exemplo-pratico/

# Problem

```
Precisamos de um programa que mande e-mails de newsletter para usuários.
Cada usuário se inscreve em apenas uma de duas opções:  Newsletter tecnologia ou Newsletter filosofia.
Antes de cada envio é preciso perceber se o usuário não se descadastrou da lista,
acessando uma api simples de um serviço chamado minhanews.io.
Basta acessar a url http://minhanews.io/<email>/status e um json do tipo
'{ tecnologia: true, filosofia: false }' será encontrado,
onde as chaves dizem sobre o cadastro na newsletter.
Como saída do programa queremos todos os e-mails que foram enviados. Agrupados por tipo de news.
```
