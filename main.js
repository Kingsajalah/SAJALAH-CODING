const mysql = require('mysql');
const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'yourPassword',
    database: 'yourDatabase'
});

const user = { username: 'user1', password: hashedPassword, email: 'user1@example.com' };

connection.query('INSERT INTO users SET ?', user, (error, results) => {
    if (error) throw error;
    console.log('User  added:', results.insertId);
});
