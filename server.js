var express = require('express');
var app = express();

// set the port of our application
// process.env.PORT lets the port be set by Heroku
var port = process.env.PORT || 8080;

// set the view engine to ejs
app.set('view engine', 'ejs');
app.engine('html', require('ejs').renderFile);

// make express look in the public directory for assets (css/js/img)
app.use(express.static(__dirname + '/public'));

//always redirect to custom domain
app.get('/', function(request, response, next) {
	console.log("head:",request.headers.host);
if(request.headers.host =="herokuapp.com") {
    response.writeHead(301, {'Location':'http://www.thetailgatevb.com'+ request.url, 'Expires': (new Date).toGMTString()});
    response.end();
}
else{
    next();
}})

// set the home page route
app.get('/', function(req, res) {

    // ejs render automatically looks in the views folder
    res.render('index.html');
});

// set the contact page route
app.get('/contact', function(req, res) {

    // ejs render automatically looks in the views folder
    res.render('contact.html');
});

// set the menu page route
app.get('/menu', function(req, res) {

    // ejs render automatically looks in the views folder
    res.render('menu.html');
});

app.listen(port, function() {
    console.log('Our app is running on http://localhost:' + port);
});