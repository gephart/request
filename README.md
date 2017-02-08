Gephart Request
===

[![Build Status](https://travis-ci.org/gephart/README.md.svg?branch=master)](https://travis-ci.org/gephart/request)

Dependencies
---
 - PHP >= 7.0

Instalation
---

```
composer require gephart/request
```

Using
---
```
$_GET["test"] = 1;
$_POST["test"] = 2;

$request = new \Gephart\Request\Request();

echo $request->get("test")); // 1
echo $request->post("test"); // 2
```