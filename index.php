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
        <fieldset>
            <legend>Calculadora</legend>
            <span>
                Numero 1:
                <input type="text" v-model="numero1">
            </span>
            <span>
                Numero 2:
                <input type="text" v-model="numero2">
            </span>
            <hr>
            <span>Resultado :{{ result }}</span>
            <hr>
            <button @click="suma">Suma</button>
        </fieldset>
        <hr>
        <hr>
        <hr>
        <fieldset>
            <legend>Alumnos</legend>
            <span>
                Nombre:
                <input type="text" v-model="name">
            </span>
            <hr>
            <span>
                Apellido :
                <input type="text" v-model="lastname">
            </span>
            <hr>
            <span>
                Role:
                <input type="text" v-model="role">
            </span>
            <hr>
            <span>Alumnos Registrados:</span>
            <ol>
                <li v-for=" alumno in alumnos">
                    {{ alumno.names }} 
                    {{  alumno.lastnames }}:
                    {{  alumno.roles }}
                </li>
            </ol>
            <hr>
            <button @click="agregar">Añadir</button>
        </fieldset>
    </div>
    
<script src="https://unpkg.com/vue@3"></script>
<script type="text/javascript">
    const {createApp} =Vue

    createApp ({
        data() {
            return {
                numero1:'',
                numero2:'',
                result:'',
                name:'',
                lastname:'',
                role:'',
                alumnos:[{names:'Karla',lastnames:'Lopez', roles:'backend'},{names :'Jesus',lastnames:'Rodriguez', roles:'frontend'}]
                
            }
        },methods: {
            suma(){
                this.result=parseInt(this.numero1)+parseInt(this.numero2),
                this.numero1='',
                this.numero2=''
            },
            agregar(){
                this.alumnos.push({names:this.name,lastnames:this.lastname,roles:this.role})
            }
        },
    }).mount('#myapp')


</script>
</body>
</html>