---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_2be1f0e022faf424f18f30275e61416e -->
## api/v1/auth/login

> Example request:

```bash
curl -X POST "http://localhost/api/v1/auth/login" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/auth/login",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/auth/login`


<!-- END_2be1f0e022faf424f18f30275e61416e -->

<!-- START_358c266f9120951dbbcb0cf2453538c9 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/post" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/post",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "posts": [
        {
            "id": 7,
            "user_id": 1,
            "titulo": "aqweqweqweqe",
            "descricao": "<p>Mussum Ipsum, cacilds vidis litro abertis. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. In elementis m&eacute; pra quem &eacute; amistosis quis leo. A ordem dos tratores n&atilde;o altera o p&atilde;o duris. Suco de cevadiss, &eacute; um leite divinis, qui tem lupuliz, matis, aguis e fermentis.<\/p><p>Sapien in monti palavris qui num significa nadis i pareci latim.&nbsp; Per aumento de cachacis, eu reclamis. Si num tem leite ent&atilde;o bota uma pinga a&iacute; cumpadi! Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis.<\/p><p>Interagi no m&eacute;, cursus quis, vehicula ac nisi. Paisis, filhis, espiritis santis. Quem num gosta di m&eacute;, boa gentis num &eacute;. Detraxit consequat et quo num tendi nada.<\/p>",
            "situacao": "A",
            "created_at": "2018-04-17 11:46:04",
            "updated_at": "2018-04-17 11:46:04"
        },
        {
            "id": 5,
            "user_id": 1,
            "titulo": "Laravel 5.6",
            "descricao": "<p><span style=\"font-family: Impact,Charcoal,sans-serif;\">Mussum Ipsum, cacilds vidis litro abertis. Interagi no m&eacute;, cursus quis, vehicula ac nisi. Viva Forevis aptent taciti sociosqu ad litora torquent. T&aacute; deprimidis, eu conhe&ccedil;o uma cachacis que pode alegrar sua vidis. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.<\/span><\/p><p><span style=\"font-family: Impact,Charcoal,sans-serif;\">Atirei o pau no gatis, per gatis num morreus. Em p&eacute; sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose. Aenean aliquam molestie leo, vitae iaculis nisl. Copo furadis &eacute; disculpa de bebadis, arcu quam euismod magna.<\/span><\/p><p><span style=\"font-family: Impact,Charcoal,sans-serif;\">Casamentiss faiz malandris se pirulit&aacute;. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Leite de capivaris, leite de mula manquis sem cabe&ccedil;a. Si u mundo t&aacute; muito paradis? Toma um m&eacute; que o mundo vai girarzis!<\/span><\/p><p><span style=\"font-family: Impact,Charcoal,sans-serif;\">Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Quem num gosta di m&eacute;, boa gentis num &eacute;. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Si num tem leite ent&atilde;o bota uma pinga a&iacute; cumpadi!<\/span><\/p><p><span style=\"font-family: Impact,Charcoal,sans-serif;\">Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. N&atilde;o sou faixa preta cumpadi, sou preto inteiris, inteiris. Suco de cevadiss deixa as pessoas mais interessantis. Todo mundo v&ecirc; os porris que eu tomo, mas ningu&eacute;m v&ecirc; os tombis que eu levo!<\/span><\/p>",
            "situacao": "A",
            "created_at": "2018-04-17 11:42:06",
            "updated_at": "2018-04-17 11:45:03"
        }
    ]
}
```

### HTTP Request
`GET api/v1/post`

`HEAD api/v1/post`


<!-- END_358c266f9120951dbbcb0cf2453538c9 -->

<!-- START_e600f513eafc60ca786bc77318c0a6a2 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/post/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/post/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "post": null
}
```

### HTTP Request
`GET api/v1/post/{id}`

`HEAD api/v1/post/{id}`


<!-- END_e600f513eafc60ca786bc77318c0a6a2 -->

<!-- START_7a2421ca325308a8d8e5aa4d74af0a50 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/post" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/post",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/post`


<!-- END_7a2421ca325308a8d8e5aa4d74af0a50 -->

<!-- START_0221415174d7c132b4c1bf02bbffd320 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/post/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/post/{id}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/post/{id}`


<!-- END_0221415174d7c132b4c1bf02bbffd320 -->

<!-- START_f0fd38b1ed5b3260975cc56578f35ce7 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/post/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/post/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/post/{id}`


<!-- END_f0fd38b1ed5b3260975cc56578f35ce7 -->

