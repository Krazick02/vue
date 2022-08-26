<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0">
    <title>Ejemplo VUE</title>
</head>
<body>
    <div id="myapp">
        hello {{ name }}
    </div>
    
<script src="https://unpkg.com/vue@3"></script>
<script type="text/javascript">
    const {createApp} =Vue

    createApp ({
        data() {
            return {
                name:'Angel AC'
            }
        },
    }).mount('#myapp')
</script>
</body>
</html>