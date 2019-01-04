<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Data from API</title>
</head>
<body>
    <pre></pre>
    
    <script>
        var proxyUrl = 'https://cors-anywhere.herokuapp.com/',
        targetUrl = 'http://adamaa.promo-21.codeur.online/API/?id=1'
        fetch(proxyUrl + targetUrl)
        .then(blob => blob.json())
        .then(data => {
            console.table(data);
            document.querySelector("pre").innerHTML = JSON.stringify(data, null, 2);
            return data;
        })
        .catch(e => {
            console.log(e);
            return e;
        });
        
    </script>
    
</body>
</html>