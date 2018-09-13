// ==============================================================================
// DEPENDENCIES
// ==============================================================================

var env = require('dotenv').load();

// Models
var db = require("./models");

// ==============================================================================
// EXPRESS CONFIGURATION
// ==============================================================================

var express = require("express");

var app = express();

var PORT = process.env.PORT || 3000;

var bodyParser = require('body-parser');

app.use(bodyParser.urlencoded({ extended: true }));

app.use(bodyParser.json());

// =============================================================================
// COOKIES!!!!!!
// =============================================================================

var passport = require('passport');

var session  = require('express-session');

app.use(session({
	secret: 'kidreads3.0',
	resave: true,
	saveUninitialized: true
 })); // session secret

app.use(passport.initialize());

app.use(passport.session()); // persistent login sessions

// =============================================================================
// VIEW ENGINE
// =============================================================================

app.engine('html', require('ejs').renderFile);
app.set('view engine', 'html');

// =============================================================================
// ROUTES & PASSPORT SET UP
// =============================================================================

require('./routes/apiRoutes.js')(app);

require('./routes/htmlRoutes.js')(app, passport);

require('./config/passport.js')(passport, db.user);

// =============================================================================
// LISTENER
// =============================================================================

var syncOptions = { force: false };

// If running a test, set syncOptions.force to true
// clearing the `testdb`
if (process.env.NODE_ENV === "test") {
  syncOptions.force = true;
}
 
db.sequelize.sync(syncOptions).then(function() {
    app.listen(PORT, function() {
        console.log(
            "==> 🌎  Listening on port %s. Visit http://localhost:%s/ in your browser.",
            PORT,
            PORT
        );
    });
});

module.exports = app;