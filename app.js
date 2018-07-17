const express = require('express');
const bodyParser = require('body-parser');
const app = express();

// app.use(express.static(__dirname + '/dist'));

//Setting up body-parser
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({
    extended: false
}));

//Setting public directory
app.use(express.static(__dirname + '/public'));

//Setting view engine
app.set('view engine', 'pug');
app.set('views', __dirname + '/views/pages');

const home = require('./routes/index');
app.use('/', home);

app.listen(process.env.PORT || 5000);