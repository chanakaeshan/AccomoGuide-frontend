var express = require('express')
var ejs = require('ejs')
var bodyParser = require('body-parser');

var app = express();

app.use(express.static('public'));

app.set('view engine','ejs');

//localhost:8080
app.listen(8080);
app.use(bodyParser.urlencoded({extended:true}));

app.get('/',function(req,res){

res.render('pages/index');
});
// ... (existing code)

// Handle Registration Form Submission
app.get('/registration', function (req, res) {
    res.render('pages/registration');
});

app.post('/register', function (req, res) {
    // Handle registration logic (you can save to a database)
    const { username, email, password } = req.body;
    res.send(`User ${username} registered successfully!`);
});

// Handle Login Form Submission
app.get('/login', function (req, res) {
    res.render('pages/login');
});

app.post('/login', function (req, res) {
    // Handle login logic (you can check against a database)
    const { username, password } = req.body;
    res.send(`User ${username} logged in successfully!`);
});

// ... (existing code)
