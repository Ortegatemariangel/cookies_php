# Cookies en PHP

## ¿Qué son las cookies?

Las cookies son pequeños datos que una página web guarda en el navegador del usuario para recordar información.

Gracias a las cookies una página puede:

- recordar usuarios
- mantener sesiones iniciadas
- guardar preferencias
- recordar productos en un carrito

# ¿Cómo funcionan?

El funcionamiento de las cookies es sencillo:

1. PHP crea una cookie.
2. El navegador la guarda.
3. Cuando el usuario vuelve al sitio, el navegador devuelve esa cookie.
4. PHP puede leer la información guardada.

# Sintaxis básica

```php
setcookie("nombre", "valor");
```

# Crear una cookie

```php
<?php

setcookie("usuario", "Carlos");

?>
```

## ¿Qué hace?

Crea una cookie llamada:

| Nombre | Valor |
|---|---|
| usuario | Carlos |

# Leer una cookie

```php
<?php

echo $_COOKIE["usuario"];

?>
```

## Resultado

```text
Carlos
```

---

# 🔍 Verificar si una cookie existe

```php
<?php

if(isset($_COOKIE["usuario"])) {

    echo "La cookie existe";

} else {

    echo "No existe";

}

?>
```
# Cookie con tiempo de duración

```php
<?php

setcookie("usuario", "Carlos", time() + 3600);

?>
```

## Explicación

```php
time() + 3600
```

significa:

```text
1 hora
```

Porque:

| Tiempo | Segundos |
|---|---|
| 1 minuto | 60 |
| 1 hora | 3600 |
| 1 día | 86400 |

# Eliminar una cookie

```php
<?php

setcookie("usuario", "", time() - 3600);

?>
```

## ¿Qué hace?

Elimina la cookie porque se le asigna una fecha pasada.

# Recomendaciones

- No guardar contraseñas en cookies.
- Verificar siempre si la cookie existe.
- Usar HTTPS en proyectos reales.
- Usar cookies solo para información simple.

# Conclusión

Las cookies permiten que las páginas web recuerden información del usuario.

Son muy importantes porque gracias a ellas existen funciones como:

- inicio de sesión automático
- carritos de compra
- preferencias guardadas
- recordar usuarios

Las cookies son una herramienta fundamental en PHP y en el desarrollo web moderno 