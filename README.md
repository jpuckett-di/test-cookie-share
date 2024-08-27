# Cookie Share

Proof of concept sharing cookies across different web services running on the same domain (localhost) but different ports.

## API

Start the API on port 4000

```bash
cd api
php -S localhost:4000
```

## Web

Start the web server on port 8000

```bash
cd web
python3 -m http.server 8000
```

## Test

Visit the API in the browser setting whatever test value you want to see http://localhost:4000?testvar=shared-cookie

1. API will set a cookie value on port 4000
2. API will redirect to web server on port 8000
3. JS on web page will read cookie value and print it on screen
