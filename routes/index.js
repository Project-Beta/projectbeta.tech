const express = require('express');
const router = express.Router();

router.get('/', (req, res, next) => {
    return res.render('index');
});

router.get('/register', (req, res, next) => {
    return res.render('/#/register');
});

router.get('/home', (req, res, next) => {
    return res.redirect('./#/home');
});

router.get('/team', (req, res, next) => {
    return res.redirect('./#/team');
});

router.get('/alumni', (req, res, next) => {
    return res.redirect('./#/alumni');
});

router.get('/contact', (req, res, next) => {
    return res.redirect('./#/contact');
});

router.get('/404', (req, res, next) => {
    return res.redirect('./#/404');
});

module.exports = router;