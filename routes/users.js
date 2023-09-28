var express = require('express');
var router = express.Router();
var usersModel = require('../models/users')
var bcrypt = require('bcrypt')
var jwt = require('jsonwebtoken')
var verifyToken = require('../middleware/jwt_decode')

router.get('/', async (req, res, next) => {
  try {
    const users = await usersModel.find()
  
    return res.send({ data: users, message: 'Get Users Success' });
  } catch (error) {
    return res.send({ message: error.message })
  }
});

router.get('/:id', async (req, res, next) => {
  try {
    const id = req.params.id
    const users = await usersModel.findById(id)
  
    return res.send({ data: users, message: 'Get Users Success' });
  } catch (error) {
    return res.send({ message: error.message })
  }
});

router.post('/create', async (req, res, next) => {
  try {
    const body = req.body
    const hashPassword = await bcrypt.hash(body.password, 10)
    const new_user = new usersModel({
      username: body.username,
      password: hashPassword,
      first_name: body.first_name,
      last_name: body.last_name,
      age: body.age,
      gender: body.gender,
    })
    const user = await new_user.save()

    return res.status(201).send({ data: user, message: 'Create User Success' })
  } catch (error) {
    return res.send({ message: error.message })
  }
})

router.put('/update/:id', verifyToken, async (req, res, next) => {
  try {
    const id = req.params.id
    const body = req.body
    const hashPassword = await bcrypt.hash(body.password, 10)
    const user = {
      username: body.username,
      password: hashPassword,
      first_name: body.first_name,
      last_name: body.last_name,
      age: body.age,
      gender: body.gender,
    }

    if (id) {
      await usersModel.updateOne({ _id: id }, { $set: user })
      const users = await usersModel.findById(id)

      return res.send({ data: users, message: 'Update User Success' })
    } else {
      return res.status(400).send({ message: 'Invalid ID' })
    }
  } catch (error) {
    return res.send({ message: error.message })
  }
})

router.delete('/delete/:id', verifyToken, async (req, res, next) => {
  try {
    const id = req.params.id

    if (id) {
      await usersModel.deleteOne({ _id: id })

      return res.status(200).send('Delete User Success')
    } else {
      return res.status(400).send({ message: 'Invalid ID' })
    }
  } catch (error) {
    return res.send({ message: error.message })
  }
})

router.post('/login', async (req, res, next) => {
  try {
    const body = req.body
    const user = await usersModel.findOne({ username: body.username })
    const check_password = await bcrypt.compare(body.password, user.password)
    if (user && check_password) {
      const { _id, username, first_name, last_name, age, gender } = user
      const token = await jwt.sign(
        {
          _id: _id,
          username: username,
          first_name: first_name,
          last_name: last_name,
          age: age,
          gender: gender
        },
        process.env.JWT_KEY
      )

      return res.status(200).send({
        data: { _id, username, first_name, last_name, age, gender },
        token: token,
        message: 'Login Success'
      })
    } else {
      return res.status(500).send({ message: 'Login Fail Username or Password Incorrect' })
    }
  } catch (error) {
    return res.status(error.status||500).send({ message: error.message })
  }
});

router.post('/logout', verifyToken, async (req, res, next) => {
  return res.send('Logout')
});

module.exports = router;
