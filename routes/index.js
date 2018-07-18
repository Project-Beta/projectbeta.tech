const express = require('express');
const router = express.Router();

router.get('/', (req, res, next) => {
    return res.render('index');
});

['register', 'home', 'team', 'events', 'alumni', 'contact', '404'].map(page => {
    router.get(`/${page}`, (req, res, next) => {
        return res.redirect(`./#/${page}`);
    })
})

module.exports = router;