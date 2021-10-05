const express = require("express")
const mysql = require("mysql")

const app = express();
const connection = mysql.createConnection({
    host: "mysql-container",
    user: "root",
    password: "pass",
    database: "docker",
})

connection.connect()

app.get('/user', function (req, res) {
    connection.query('SELECT * FROM USER', function (error, results) {
        if (error) {
            res.send(error)
        }

        res.send(results.map(item => ({
            name: item.name,
            cellphone: item.cellphone,
            adm: item.adm
        })))
    })
})

app.listen(9001, '0.0.0.0', function () {
    console.log('XPTO1439');
})