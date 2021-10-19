const mysql = require('baseDatos')

const concection = baseDatos.createConnection({
host: 'localhost',
user: 'root',
password: '',
database: 'bdatos',
})

concection.connect( (err)=>{
    if(err) throw err
    console.log('la conexion funciona')


})



